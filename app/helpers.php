<?php

use App\Models\ClinicInventoryLogs;
use App\Models\ClinicStockBinRecords;
use App\Models\LPORecords;
use App\Models\Profile;
use App\Models\QueueNumber;
use App\Models\Room;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\ServiceType;
use App\Models\StockBinRecords;
use App\Models\VarianceRecords;
use App\Models\ClinicVarianceRecords;
use GuzzleHttp\Client;
use Carbon\Carbon;


if (!function_exists('mainMenu')) {

    function mainMenu()
    {
        return [
            [
                "title" => "Dashboard",
                "slug" => "dashboard",
                "svg" => 'dashboard-svg',
                "link" => "/dashboard",
                'permissions' => 'dashboard'
            ],
            [
                "title" => "RTL",
                "slug" => "rtl",
                "link" => "/dashboard/rtl",
                "svg" => "rtl-svg",
                'permissions' => 'rtl'
            ],
            [
                "title" => "כפתור שפה ודינאמי",
                "slug" => "language",
                "link" => "/dashboard/language",
                "svg" => "language-svg",
                'permissions' => 'language'
            ],
            [
                "title" => "אמצעי תשלום",
                "slug" => "payment",
                "link" => "/dashboard/payment",
                "svg" => "payment-svg",
                'permissions' => 'payment'
            ],
            [
                "title" => "גופנים",
                "slug" => "fonts",
                "link" => "/dashboard/fonts",
                "svg" => "fonts-svg",
                'permissions' => 'fonts'
            ],
            [
                "title" => "תצורת WhatsApp",
                "slug" => "whatsapp",
                "link" => "/dashboard/whatsapp",
                "svg" => "whatsapp-svg",
                'permissions' => 'whatsapp'
            ],
            [
                "title" => "שַׁבָּת",
                "slug" => "sabbath",
                "link" => "/dashboard/sabbath",
                "svg" => "sabbath-svg",
                'permissions' => 'sabbath'
            ],
            [
                "title" => "התראות",
                "slug" => "alerts",
                "link" => "/dashboard/alerts",
                "svg" => "alerts-svg",
                'permissions' => 'alerts'
            ],
            [
                "title" => "נגישות",
                "slug" => "accessibility",
                "link" => "/dashboard/accessibility",
                "svg" => "accessibility-svg",
                'permissions' => 'accessibility'
            ],
            [
                "title" => "מיקוד אוטומטי",
                "slug" => "automatic-focus",
                "link" => "/dashboard/postal",
                "svg" => "automatic-focus-svg",
                'permissions' => 'automatic-focus'
            ],
            [
                "title" => "CSS",
                "slug" => "css",
                "link" => "/dashboard/css",
                "svg" => "css-svg",
                'permissions' => 'css'
            ],
            [
                "title" => "ביטולי עסקאות",
                "slug" => "transaction-cancellation",
                "link" => "/dashboard/orders/transaction-cancellation",
                "svg" => "transaction-cancellation-svg",
                'permissions' => 'transaction-cancellation'
            ],
            [
                "title" => "היסטוריית ביטולים",
                "slug" => "cancellation-history",
                "link" => "/dashboard/orders/cancellation-history",
                "svg" => "cancellation-history-svg",
                'permissions' => 'cancellation-history'
            ],
            [
                "title" => "הדרכה",
                "slug" => "training",
                "link" => "/dashboard/training",
                "svg" => "training-svg",
                'permissions' => 'training'
            ],
            [
                "title" => "תמיכה",
                "slug" => "support",
                "link" => "/dashboard/support",
                "svg" => "support-svg",
                'permissions' => 'support'
            ],
        ];
    }
}



if (!function_exists('validatePhone')) {

    function validatePhone($value)
    {

        $pattern = '/^[0-9+\-()]{10,15}$/';
        $string = str_replace(' ', '', $value); //remove space from phone

        if (!preg_match($pattern, $string)) {
            return false;
        }
        return true;
    }
}


if (!function_exists("generatePaginationLinks")) {
    function generatePaginationLinks($pagination)
    {
        $totalPages = $pagination->lastPage();
        $currentPage = $pagination->currentPage();
        $perPage = $pagination->perPage();
        $queryString = request()->except('page', 'per_page'); // Preserve other query params except page & per_page

        $html = '<nav aria-label="Page navigation">
    <div class="d-lg-flex justify-content-between align-items-center">';

        // Generate pagination links aligned to the right
        $html .= '<ul class="pagination justify-content-end custom-pagination">';

        // Generate "Previous" link
        if ($currentPage > 1) {
            $prevPage = $currentPage - 1;
            $html .= '<li class="page-item navigate">
                <a class="page-link"
                    href="?page=' . $prevPage . '&per_page=' . $perPage . '&' . http_build_query($queryString) . '">
                    <span class="material-icons-outlined d-flex aic jcc"
                        style="color: #292D32; font-size: 12px;">arrow_back_ios</span>
                </a>
            </li>';
        }

        // Generate numbered links
        if ($currentPage == 1) {
            $html .= '<li class="page-item active"><span class="page-link">1</span></li>';
        } else {
            $html .= '<li class="page-item"><a class="page-link"
                    href="?page=1&per_page=' . $perPage . '&' . http_build_query($queryString) . '">1</a></li>';
        }

        if ($currentPage > 5) {
            $html .= '<li class="page-item"><span class="page-link">...</span></li>';
        }

        $startPage = max(2, $currentPage - 2);
        $endPage = min($totalPages - 1, $startPage + 4);
        for ($i = $startPage; $i <= $endPage; $i++) {
            $html .= '<li class="page-item ' . ($i == $currentPage ? 'active'
                : '') . '">
                    <a class="page-link" style="padding: 10px 15px" href="?page=' . $i . '&per_page=' . $perPage . '&'
                . http_build_query($queryString) . '">' . $i . '</a>
                  </li>';
        }
        if ($currentPage < $totalPages - 4) {
            $html .= '<li class="page-item"><span class="page-link">...</span></li>';
        } // Generate last page link

        if ($currentPage == $totalPages) {
            $html .= '<li class="page-item active"><span class="page-link">' .
                $totalPages . '</span></li>';
        } else {
            $html .= '<li class="page-item">
                    <a class="page-link" href="?page=' . $totalPages . '&per_page=' . $perPage . '&' .
                http_build_query($queryString) . '">' . $totalPages . '</a>
                  </li>';
        } // Generate "Next" link
        if ($currentPage < $totalPages) {
            $nextPage = $currentPage + 1;
            $html .= '<li class="page-item navigate">
                    <a class="page-link" href="?page=' . $nextPage . '&per_page=' . $perPage . '&' .
                http_build_query($queryString) . '">
                        <span class="material-icons-outlined d-flex aic jcc" style="color: #292D32; font-size: 12px;">arrow_forward_ios</span>
                    </a>
                  </li>';
        }
        $html .= '</ul>';
        // Display "Showing 1 to X of Y entries" text
        $html .= '<div class="d-lg-flex gap-2 aic">
                <span class="fw400 fs12 w-100">Showing ' . (($currentPage - 1) * $perPage + 1) . ' to ' .
            min($currentPage * $perPage, $pagination->total()) . ' of ' . $pagination->total() . ' entries</span>';

        // Dropdown for items per page
        $html .= '<div class="dropdown mx-3 my-auto">
                    <a class="nav-link fs-14 fw-500 dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Show ' . $perPage . '
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">';

        foreach ([10, 20, 30, 40, 50, 100] as $_per_page) {
            $html .= '<li class="my-2">
                            <a class="dropdown-item"
                                href="?page=' . $currentPage . '&per_page=' . $_per_page . '&' . http_build_query($queryString) . '">'
                . $_per_page . '</a>
                        </li>';
        }

        $html .= '</ul>
                </div>
    </div>
</nav>';

        return $html;
    }
}


if (!function_exists('adminPermissions')) {

    function adminPermissions()
    {

        $permissions = [
            [
                "name" => "Dashboard",
                "slug" => "dashboard",
                "modules" => ['read', 'create', 'edit', 'delete']
            ],
            [
                "name" => "Products",
                "slug" => "products",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Active Ingredients",
                "slug" => "active-ingredient",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Formulations",
                "slug" => "formulations",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Measurements",
                "slug" => "measurement",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Services",
                "slug" => "services",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Service Types",
                "slug" => "service-types",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Consultations",
                "slug" => "consultation",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Consultation Types",
                "slug" => "consultation-types",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Profiles",
                "slug" => "profiles",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Location",
                "slug" => "location",
                "modules" => ['read', 'create', 'edit', 'delete', 'appointments', 'inventory', 'variance', 'tickets', 'sales', 'export', 'rooms']
            ],
            [
                "name" => "Requisition",
                "slug" => "requisition",
                "modules" => ['read', 'create', 'edit', 'approve', 'reject', 'deliver', 'confirm']
            ],
            [
                "name" => "Inventory",
                "slug" => "inventory",
                "modules" => ['read', 'create', 'edit', 'bin', 'export']
            ],
            [
                "name" => "Supplier",
                "slug" => "supplier",
                "modules" => ['read', 'create', 'edit', 'delete', 'filter']
            ],
            [
                "name" => "LPOs",
                "slug" => "lpos",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Payments",
                "slug" => "payments",
                "modules" => ['read', 'filter']
            ],
            [
                "name" => "Staff Users",
                "slug" => "staff-users",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Create Role",
                "slug" => "create-role",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "All Users",
                "slug" => "all-users",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Blogs",
                "slug" => "blogs",
                "modules" => ['read', 'create', 'edit', 'delete', 'filter']
            ],
            [
                "name" => "Tags",
                "slug" => "tags",
                "modules" => ['read', 'create', 'edit', 'delete', 'filter']
            ],
            [
                "name" => "Insurance",
                "slug" => "insurance",
                "modules" => ['read', 'create', 'edit', 'delete', 'filter']
            ],
            [
                "name" => "Patients",
                "slug" => "admin-patients",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Terms and Conditions",
                "slug" => "terms",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "Privacy Policy",
                "slug" => "privacy",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],
            [
                "name" => "FAQs",
                "slug" => "faqs",
                "modules" => ['read', 'create', 'edit', 'delete', 'export']
            ],

        ];
        return collect($permissions);
    }
}
