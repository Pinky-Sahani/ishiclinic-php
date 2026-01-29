<?php
/* =====================================================
   TOAST REDIRECT HELPER (NO SESSION)
   ===================================================== */
function redirectWithToast(string $url, string $type, string $message): void
{
    $type = urlencode($type);
    $message = urlencode($message);

    header("Location: {$url}?toast={$type}&msg={$message}");
    exit;
}

/* =====================================================
   TOAST UI (AUTO LOAD FROM URL PARAMS)
   ===================================================== */
if (isset($_GET['toast'], $_GET['msg'])):

    $type = $_GET['toast'];
    $msg = $_GET['msg'];

    $colors = [
        'success' => 'bg-green-600',
        'error' => 'bg-red-600',
        'warning' => 'bg-yellow-500 text-black',
        'info' => 'bg-blue-600',
    ];
    ?>
    <div id="toast" class="fixed top-6 right-6 z-[9999]
               min-w-[260px] min-h-[60px]
               px-4 py-3
               flex items-center justify-center
               text-center
               rounded-lg shadow-lg
               text-white text-sm font-medium
               <?= $colors[$type] ?? 'bg-gray-700' ?>">
        <?= htmlspecialchars($msg) ?>
    </div>

    <script>
        const toast = document.getElementById('toast');
        if (toast) {
            setTimeout(() => {
                toast.remove();

                // remove toast params from URL
                const url = new URL(window.location);
                url.searchParams.delete('toast');
                url.searchParams.delete('msg');
                window.history.replaceState({}, document.title, url);
            }, 3000);
        }
    </script>
<?php endif; ?>