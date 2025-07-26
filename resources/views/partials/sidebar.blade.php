@php
  use App\Helpers\Fungsi;
  use App\Helpers\GetSettings;
  $menuSidebar = GetSettings::getMenu();
@endphp
<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
  <!-- BEGIN menu -->
  <div class="menu">
    <div class="menu-header">Navigation</div>



    @php
      use Illuminate\Support\Str;

      function renderMenu($items)
      {
          $html = '';
          foreach ($items as $item) {
              $hasChildren = isset($item['children']) && count($item['children']) > 0;
              $isActive = request()->is(ltrim($item['href'], '/')) || url($item['href']) == url()->current();

              // recursive check if child is active
              $isChildActive =
                  $hasChildren &&
                  collect($item['children'])->contains(function ($child) {
                      return request()->is(ltrim($child['href'], '/')) || url($child['href']) == url()->current();
                  });

              $itemClass = 'menu-item' . ($hasChildren ? ' has-sub' : '');
              $itemClass .= $isActive || $isChildActive ? ' active expand' : '';

              $html .= '<div class="' . $itemClass . '">';
              $html .= '<a href="' . ($hasChildren ? '#' : $item['href']) . '" class="menu-link">';
              $html .= '<span class="menu-icon">' . $item['icon'] . '</span>';
              $html .= '<span class="menu-text">' . $item['title'] . '</span>';
              if ($hasChildren) {
                  $html .= '<span class="menu-caret"><b class="caret"></b></span>';
              }
              $html .= '</a>';

              if ($hasChildren) {
                  $html .= '<div class="menu-submenu" style="' . ($isChildActive ? 'display:block;' : '') . '">';
                  $html .= renderMenu($item['children']);
                  $html .= '</div>';
              }

              $html .= '</div>';
          }
          return $html;
      }
    @endphp

    {!! renderMenu($menuSidebar) !!}


  </div>
  <!-- END menu -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $.ajax({
      url: "http://127.0.0.1:8000/global/get_menu",
      method: "GET",
      dataType: "json",
      success: function(data) {
        const html = buildMenu(data);
        $('#menu-container').html(html);
      },
      error: function(xhr, status, error) {
        console.error("Gagal mengambil data menu:", error);
      }
    });

    function buildMenu(items) {
      let html = '';
      items.forEach(item => {
        html += `
          <div class="menu-item">
            <a href="${item.href}" class="menu-link">
              <span class="menu-icon"><i class="fa fa-circle"></i></span>
              <span class="menu-text">${item.title}</span>
            </a>
            ${item.children && item.children.length > 0 ? `<div class="submenu">${buildMenu(item.children)}</div>` : ''}
          </div>
        `;
      });
      return html;
    }
  });
</script>
