<footer class="google-footer">
    <div class="footer-top">Philippines</div>
    <div class="footer-bottom">
        <div class="footer-links left">
            <a href="https://about.google/?utm_source=google-PH&utm_medium=referral&utm_campaign=hp-footer&fg=1">About</a>
            <a href="https://www.google.com/intl/en_ph/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1">Advertising</a>
            <a href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpbfooter&fg=1">Business</a>
            <a href="https://google.com/search/howsearchworks/?fg=1">How Search works</a>
        </div>
        <div class="footer-links right">
            <a href="https://policies.google.com/privacy?hl=en-PH&fg=1">Privacy</a>
            <a href="https://policies.google.com/terms?hl=en-PH&fg=1">Terms</a>
            <div class="settings-dropdown">
                <a href="#" class="settings-toggle">Settings</a>
                <div class="dropdown-menu">
                    <a href="#">Search settings</a>
                    <a href="#">Advanced search</a>
                    <a href="#">Your data in Search</a>
                    <a href="#">Search history</a>
                    <a href="#">Search help</a>
                    <a href="#">Send feedback</a>
                    <hr>
                    <div class="dark-theme">
                        <span>Dark theme: </span>
                        <span class="toggle-btn">On</span>
                    </div>
                    <hr>
                    <a href="#">Terms</a>
                    <a href="#">Settings</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .google-footer {
            background: #f2f2f2;
            color: #70757a;
            font-size: 14px;
            margin-top: 800px;
            font-family: Arial, sans-serif;
        }

        .footer-top {
            padding: 15px 30px;
            border-bottom: 1px solid #dadce0;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 25px 30px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #70757a;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer-links.right {
            margin-left: auto;
            position: relative;
        }

        .settings-dropdown {
            position: relative;
            display: inline-block;
        }

        .settings-toggle {
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            bottom: 100%;
            right: 0;
            background: #2d2d2d;
            border: 1px solid #555;
            border-radius: 4px;
            min-width: 270px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            color: #e8e8e8;
            font-size: 14px;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            padding: 12px 20px;
            color: #e8e8e8;
            text-decoration: none;
            transition: background 0.2s;
        }

        .dropdown-menu a:hover {
            background: #404040;
            text-decoration: none;
        }

        .dropdown-menu hr {
            margin: 8px 0;
            border: none;
            border-top: 1px solid #444;
        }

        .dark-theme {
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .toggle-btn {
            padding: 4px 8px;
            background: #404040;
            border-radius: 3px;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .footer-bottom {
                flex-direction: column;
                gap: 10px;
            }

            .footer-links.right {
                margin-left: 0;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const settingsToggle = document.querySelector('.settings-toggle');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            settingsToggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenu.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.settings-dropdown')) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    </script>
</footer>

