<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Products Dashboard UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./css/dashbord.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="app-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="app-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z" />
                    </svg>
                </div>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-list-item active">
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor"  
                            class="feather feather-shopping-bag" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path  d="M5 2C4.84476 2 4.69164 2.03615 4.55279 2.10557L1.10557 3.82918C0.428004 4.16796 0 4.86049 0 5.61803V9.38197C0 10.8687 1.56462 11.8357 2.89443 11.1708L4 10.618V19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19V10.618L21.1056 11.1708C22.4354 11.8357 24 10.8687 24 9.38197V5.61803C24 4.86049 23.572 4.16796 22.8944 3.82918L19.4472 2.10557C19.3084 2.03615 19.1552 2 19 2H16C14.8954 2 14 2.89543 14 4C14 5.10457 13.1046 6 12 6C10.8954 6 10 5.10457 10 4C10 2.89543 9.10457 2 8 2H5ZM4 4.61803V8.38197L2 9.38197L2 5.61803L4 4.61803ZM8 4H6V9V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V9V4H16C16 6.20914 14.2091 8 12 8C9.79086 8 8 6.20914 8 4ZM22 5.61803L20 4.61803V8.38197L22 9.38197V5.61803ZM10 12.5C10 12.2239 10.2239 12 10.5 12C10.7761 12 11 12.2239 11 12.5V14.5C11 14.7761 10.7761 15 10.5 15C10.2239 15 10 14.7761 10 14.5V12.5ZM10.5 10C9.11929 10 8 11.1193 8 12.5V14.5C8 15.8807 9.11929 17 10.5 17C11.8807 17 13 15.8807 13 14.5V12.5C13 11.1193 11.8807 10 10.5 10ZM14 10C13.4477 10 13 10.4477 13 11C13 11.5523 13.4477 12 14 12V16C14 16.5523 14.4477 17 15 17C15.5523 17 16 16.5523 16 16V11C16 10.4477 15.5523 10 15 10H14Z" fill="#000000"></path> </g></svg>
                        <span>Players</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        <span>Statistics</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#">
                        <svg viewBox="0 0 24 24" version="1.1" class="feather feather-inbox" width="18" height="18" ><g stroke-width="0"></g><g  stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_team_add_24_filled" fill="white" fill-rule="nonzero"> <path d="M17.5,12 C20.5375661,12 23,14.4624339 23,17.5 C23,20.5375661 20.5375661,23 17.5,23 C14.4624339,23 12,20.5375661 12,17.5 C12,14.4624339 14.4624339,12 17.5,12 Z M17.5,13.9992349 L17.4101244,14.0072906 C17.2060313,14.0443345 17.0450996,14.2052662 17.0080557,14.4093593 L17,14.4992349 L16.9996498,16.9992349 L14.4976498,17 L14.4077742,17.0080557 C14.2036811,17.0450996 14.0427494,17.2060313 14.0057055,17.4101244 L13.9976498,17.5 L14.0057055,17.5898756 C14.0427494,17.7939687 14.2036811,17.9549004 14.4077742,17.9919443 L14.4976498,18 L17.0006498,17.9992349 L17.0011076,20.5034847 L17.0091633,20.5933603 C17.0462073,20.7974534 17.207139,20.9583851 17.411232,20.995429 L17.5011076,21.0034847 L17.5909833,20.995429 C17.7950763,20.9583851 17.956008,20.7974534 17.993052,20.5933603 L18.0011076,20.5034847 L18.0006498,17.9992349 L20.5045655,18 L20.5944411,17.9919443 C20.7985342,17.9549004 20.9594659,17.7939687 20.9965098,17.5898756 L21.0045655,17.5 L20.9965098,17.4101244 C20.9594659,17.2060313 20.7985342,17.0450996 20.5944411,17.0080557 L20.5045655,17 L17.9996498,16.9992349 L18,14.4992349 L17.9919443,14.4093593 C17.9549004,14.2052662 17.7939687,14.0443345 17.5898756,14.0072906 L17.5,13.9992349 Z M14.2540247,10 C15.0885672,10 15.8169906,10.4543496 16.2054276,11.1291814 C13.23532,11.7296535 11,14.3537833 11,17.5 C11,18.7891565 11.3752958,19.9906579 12.0225923,21.0012092 L12.002976,21 C9.51711551,21 7.50192738,18.9848119 7.50192738,16.4989513 L7.50192738,12.25 C7.50192738,11.0073593 8.5092867,10 9.75192738,10 L14.2540247,10 Z M7.40645343,10.000271 C6.89290875,10.5355324 6.56080951,11.2462228 6.50902592,12.0334718 L6.50192738,12.25 L6.50192738,16.4989513 C6.50192738,17.3455959 6.69319107,18.1475684 7.03486751,18.8640179 C6.70577369,18.9530495 6.35898976,19 6.00123996,19 C3.79141615,19 2,17.2085839 2,14.99876 L2,12.25 C2,11.059136 2.92516159,10.0843551 4.09595119,10.0051908 L4.25,10 L7.40645343,10.000271 Z M19.75,10 C20.9926407,10 22,11.0073593 22,12.25 L22.0008195,12.8103588 C20.8328473,11.6891263 19.2469007,11 17.5,11 L17.2568191,11.0044649 L17.2568191,11.0044649 C17.1013063,10.6296432 16.8768677,10.2893694 16.5994986,10.000271 L19.75,10 Z M18.5,4 C19.8807119,4 21,5.11928813 21,6.5 C21,7.88071187 19.8807119,9 18.5,9 C17.1192881,9 16,7.88071187 16,6.5 C16,5.11928813 17.1192881,4 18.5,4 Z M12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.65685425 13.6568542,9 12,9 C10.3431458,9 9,7.65685425 9,6 C9,4.34314575 10.3431458,3 12,3 Z M5.5,4 C6.88071187,4 8,5.11928813 8,6.5 C8,7.88071187 6.88071187,9 5.5,9 C4.11928813,9 3,7.88071187 3,6.5 C3,5.11928813 4.11928813,4 5.5,4 Z" > </path> </g> </g> </g></svg>
                        <span>Teams</span>
                    </a>
                </li>
            </ul>
            <div class="account-info">
                <div class="account-info-picture">
                    <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                        alt="Account">
                </div>
                <div class="account-info-name">Monica G.</div>
                <button class="account-info-more">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-more-horizontal">
                        <circle cx="12" cy="12" r="1" />
                        <circle cx="19" cy="12" r="1" />
                        <circle cx="5" cy="12" r="1" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="app-content">
            <div class="app-content-header">
                <h1 class="app-content-headerText">Products</h1>
                <button class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="app-content-headerButton">Add Product</button>
            </div>
            <div class="app-content-actions">
                <input class="search-bar" placeholder="Search..." type="text">
                <div class="app-content-actions-wrapper">
                    <div class="filter-button-wrapper">
                        <button class="action-button filter jsFilter"><span>Filter</span><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-filter">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
                            </svg></button>
                        <div class="filter-menu">
                            <label>Category</label>
                            <select>
                                <option>All Categories</option>
                                <option>Furniture</option>
                                <option>Decoration</option>
                                <option>Kitchen</option>
                                <option>Bathroom</option>
                            </select>
                            <label>Status</label>
                            <select>
                                <option>All Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                            </select>
                            <div class="filter-menu-buttons">
                                <button class="filter-button reset">
                                    Reset
                                </button>
                                <button class="filter-button apply">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </div>
                    <button class="action-button list active" title="List View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6" />
                            <line x1="8" y1="12" x2="21" y2="12" />
                            <line x1="8" y1="18" x2="21" y2="18" />
                            <line x1="3" y1="6" x2="3.01" y2="6" />
                            <line x1="3" y1="12" x2="3.01" y2="12" />
                            <line x1="3" y1="18" x2="3.01" y2="18" />
                        </svg>
                    </button>
                    <button class="action-button grid" title="Grid View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7" />
                            <rect x="14" y="3" width="7" height="7" />
                            <rect x="14" y="14" width="7" height="7" />
                            <rect x="3" y="14" width="7" height="7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="products-area-wrapper tableView">
                <div class='addPlayerContainer '>
                    <div class="formContainer">
                        <div>
                            <h3 style="color: white; font-family: Arial, Helvetica, sans-serif; padding: 3px ;">Add
                                player
                            </h3>
                        </div>
                        <div class="error" style="display: none; justify-content: center; align-items: center; ">
                            <span class="errorSpan" style="color: white;"></span>
                        </div>

                        <section class="section2">
                            <form action="" id="formData" method="POST">
                                <div class="textInputs">
                                    <div>
                                        <label for="name" class="laber">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Player name">
                                    </div>
                                    <div>
                                        <label for="">Nationality</label>
                                        <input type="text" id="nationality" name="nationality" placeholder="Nationality">
                                    </div>
                                    <div>
                                        <label for="">Club</label>
                                        <input type="text" id="club" name="club" placeholder="Name of club">
                                    </div>
                                    <div class="positionSelect">
                                        <label for="">Position</label>
                                        <select name="" id="positionSelect">
                                            <option value="" selected></option>
                                            <option value="ST">ST</option>
                                            <option value="LM">LW</option>
                                            <option value="RW">RW</option>
                                            <option value="CM">CM</option>
                                            <option value="LB">LB</option>
                                            <option value="CB">CB</option>
                                            <option value="RB">RB</option>
                                            <option value="GK">GK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="filesInput">
                                    <div class="fileContainer">
                                        <label for="photo">Photo</label>
                                        <input type="file" id="photo" name="photo">
                                        <div class="photoOutput">
                                            <img src="./images/default-pic.jpg" alt="" id="photoOutput">
                                        </div>
                                    </div>
                                    <div class="fileContainer">
                                        <label for="flag">Flag</label>
                                        <input type="file" id="flag" name="flag">
                                        <div class="flagOutput">
                                            <img src="./images/default-pic.jpg" alt="" id="flagOutput">
                                        </div>
                                    </div>
                                    <div class="fileContainer">
                                        <label for="logo">Logo Club</label>
                                        <input type="file" id="logo" name="logo">
                                        <div class="LogoOutput">
                                            <img src="./images/default-pic.jpg" alt="" id="LogoOutput">
                                        </div>
                                    </div>
                                </div>
                                <div class="numInputs" id="numInputs">
                                    <div class="div">
                                        <label for="">RAT</label>
                                        <input class="num" type="number" name="rating" id="rating2" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">PAC</label>
                                        <input class="num" type="number" name="pace" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">SHO</label>
                                        <input class="num" type="number" name="shooting" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">PAS</label>
                                        <input class="num" type="number" name="passing" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">DRI</label>
                                        <input class="num" type="number" name="dribbling" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">DEF</label>
                                        <input class="num" type="number" name="defending" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">PHY</label>
                                        <input class="num" type="number" name="physical" placeholder="10 -> 99">
                                    </div>
                                    <button type="submit" class="createBtn">Submit</button>
                                </div>
                                <div class="numInputs GKinputs" id="numInputsGK" style="display: none;">
                                    <div class="div">
                                        <label for="">RAT</label>
                                        <input class="numPlayer" type="number" name="rating" id="rating1" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">DIV</label>
                                        <input class="numPlayer" type="number" name="diving" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">HAN</label>
                                        <input class="numPlayer" type="number" name="handling" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">KIC</label>
                                        <input class="numPlayer" type="number" name="kicking" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">REF</label>
                                        <input class="numPlayer" type="number" name="reflexes" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">SPD</label>
                                        <input class="numPlayer" type="number" name="speed" placeholder="10 -> 99">
                                    </div>
                                    <div class="div">
                                        <label for="">POS</label>
                                        <input class="numPlayer" type="number" name="positioning" placeholder="10 -> 99">
                                    </div>
                                    <button type="submit" class="createBtn">Submit</button>
                                </div>
                            </form>
                        </section>

                    </div>
                </div>
                <div class="playersListContainer ">
                    <div class="products-header">
                        <div class="product-cell image">
                            Items
                            <button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-cell category">Category<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell status-cell">Status<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell sales">Sales<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell stock">Stock<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price">Price<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                    </div>
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="12" cy="5" r="1" />
                                <circle cx="12" cy="19" r="1" />
                            </svg>
                        </button>
                        <div class="product-cell image">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                alt="product">
                            <span>Ocean</span>
                        </div>
                        <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
                        <div class="product-cell status-cell">
                            <span class="cell-label">Status:</span>
                            <span class="status active">Active</span>
                        </div>
                        <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
                        <div class="product-cell stock"><span class="cell-label">Stock:</span>36</div>
                        <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="./js/script.js"></script>

</body>

</html>





































































<!-- <?php
// Include database connection file
include('../src/config/database.php');

// Fetch data from the database for players, clubs, and statistics
$players = mysqli_query($conn, "SELECT * FROM players");
$clubs = mysqli_query($conn, "SELECT * FROM clubs");
$playerStats = mysqli_query($conn, "SELECT id_club, COUNT(*) AS total_players FROM players GROUP BY id_club");

$statsData = [];
while ($row = mysqli_fetch_assoc($playerStats)) {
    $clubName = mysqli_fetch_assoc(mysqli_query($conn, "SELECT name FROM clubs WHERE id = " . $row['club_id']))['name'];
    $statsData[] = [
        'club' => $clubName,
        'total' => $row['total_players']
    ];
}
?> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<div class="container mt-5">
    <h1>Admin Dashboard</h1>

    <h2>Players</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Club</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($player = mysqli_fetch_assoc($players)): ?>
                <tr>
                    <td><?= $player['id'] ?></td>
                    <td><?= $player['name'] ?></td>
                    <td><?= $player['age'] ?></td>
                    <td><?= $player['id_club'] ?></td>
                    <td>
                        <a href="edit_player.php?id=<?= $player['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_player.php?id=<?= $player['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="add_player.php" class="btn btn-primary">Add Player</a>

    <h2>Clubs</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($club = mysqli_fetch_assoc($clubs)): ?>
                <tr>
                    <td><?= $club['id'] ?></td>
                    <td><?= $club['name'] ?></td>
                    <td><?= $club['city'] ?></td>
                    <td>
                        <a href="edit_club.php?id=<?= $club['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_club.php?id=<?= $club['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="add_club.php" class="btn btn-primary">Add Club</a>

    <h2>Statistics</h2>
    <canvas id="statsChart" width="400" height="200"></canvas>
</div>

<script>
    const statsData = <?= json_encode($statsData) ?>;
    const ctx = document.getElementById('statsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: statsData.map(stat => stat.club),
            datasets: [{
                label: 'Total Players',
                data: statsData.map(stat => stat.total),
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html> -->