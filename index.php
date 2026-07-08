<?php include 'header.php'; ?>

<main>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
            padding: 0 20px 180px 20px;
            min-height: calc(100vh - 180px);
        }

        .search-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 584px;
        }

        .google-logo {
            width: 272px;
            height: 92px;
            margin-bottom: 30px;
            object-fit: contain;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Search Bar Wrapper */
        .search-box {
            display: flex;
            align-items: center;
            width: 100%;
            height: 44px;
            border: 1px solid #dfe1e5;
            border-radius: 24px;
            padding: 0 8px 0 12px;
            box-sizing: border-box;
            background-color: #fff;
            transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1), border-color 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
            position: relative;
        }

        .search-box:hover, 
        .search-box:focus-within {
            box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
            border-color: rgba(223, 225, 229, 0);
        }

        .search-box input[type="text"] {
            flex-grow: 1;
            border: none;
            outline: none;
            font-size: 16px;
            height: 34px;
            padding: 0 10px;
            background-color: transparent;
            font-family: inherit;
        }

        /* Search Icon */
        .search-icon {
            width: 20px;
            height: 20px;
            fill: #9aa0a6;
            flex-shrink: 0;
            margin-right: 6px;
        }

        .action-icons {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.2s;
        }

        .icon-btn:hover {
            background-color: #f1f3f4;
        }

        .icon-btn svg {
            width: 20px;
            height: 20px;
            fill: #4d5156;
        }

        /* Buttons Styling */
        .buttons-container {
            margin-top: 24px;
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .buttons-container button {
            padding: 0 20px;
            height: 36px;
            border: 1px solid #f8f9fa;
            border-radius: 4px;
            background-color: #f8f9fa;
            color: #3c4043;
            font-family: inherit;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.1s ease;
        }

        .buttons-container button:hover {
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
            border: 1px solid #dadce0;
            color: #202124;
            background-color: #f8f9fa;
        }

        .language-offer {
            margin-top: 24px;
            font-size: 13px;
            color: #4d5156;
            line-height: 1.6;
        }

        .language-offer a {
            color: #1a0dab;
            text-decoration: none;
            margin: 0 3px;
        }

        .language-offer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            main {
                padding: 0 20px 200px 20px;
            }

            .search-container {
                max-width: 100%;
            }

            .google-logo {
                width: 200px;
                height: 67px;
                margin-bottom: 20px;
            }

            .search-box {
                height: 40px;
            }

            .buttons-container {
                gap: 8px;
                margin-top: 20px;
            }

            .buttons-container button {
                padding: 0 16px;
                height: 32px;
                font-size: 13px;
            }
        }
    </style>

    <div class="search-container">
        <!-- Official Google Logo -->
        <img class="google-logo" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google">
        
        <!-- Search Form -->
        <form action="https://www.google.com/search" method="get">
            <div class="search-box">
                <!-- Magnifying Glass Icon -->
                <svg class="search-icon" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
                
                <input type="text" name="q" title="Search" autofocus>

                <!-- Search Actions (AI, Voice, Lens) -->
                <div class="action-icons">


                    <!-- Voice Search Mic Icon -->
                    <button type="button" class="icon-btn" title="Search by voice">
                        <svg focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z"></path>
                            <path fill="currentColor" d="m11 18.08h2v3.92h-2z"></path>
                            <path fill="currentColor" d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45.56 2.42 1.47 3.38v.32l-1.15 1.18z"></path>
                            <path fill="currentColor" d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z"></path>
                        </svg>
                    </button>

                    <!-- Google Lens Image Icon -->
                    <button type="button" class="icon-btn" title="Search by image">
                        <svg focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M8.25 3.5H5.5C4.4 3.5 3.5 4.4 3.5 5.5v2.75h2V5.5h2.75v-2z"></path>
                            <path fill="currentColor" d="M8.25 20.5H5.5c-1.1 0-2-.9-2-2v-2.75h2v2.75h2.75v2z"></path>
                            <path fill="currentColor" d="M20.5 8.25V5.5c0-1.1-.9-2-2-2h-2.75v2H18.5v2.75h2z"></path>
                            <path fill="currentColor" d="M20.5 15.75V18.5c0 1.1-.9 2-2 2h-2.75v2H18.5c1.1 0 2-.9 2-2v-2.75h-2z"></path>
                            <circle fill="currentColor" cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>

                     <!-- AI Mode / Gemini Sparkle Icon -->
                    <button type="button" class="icon-btn" title="Search with AI">
                        <svg focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M12 2.5C12 2.5 12 9.5 19.5 12C12 14.5 12 21.5 12 21.5C12 21.5 12 14.5 4.5 12C12 9.5 12 2.5 12 2.5Z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="buttons-container">
                <button type="submit">Google Search</button>
                <button type="submit" name="btnI" value="1">I'm Feeling Lucky</button>
            </div>
        </form>

        <div class="language-offer">
            Google offered in: <a href="#">Filipino</a> <a href="#">Cebuano</a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>