<?php 
include ('includes/dbconfig.php');
include ('includes/security.php');
$db = new Database();

// get admin data
$adminuser = $_SESSION['username'];
$adminwhere = "username = '$adminuser'";
$admin = $db->getData("admin", $adminwhere);

$page = "dashboard";
?>
<!DOCTYPE html>
<html x-data="main" class="dark" :class="[$store.app.mode]">

<head>
    <title>Dashboard | Justice For Commons Admin Panel</title>
    <?php include_once('includes/header.php')?>
</head>

<body x-data="main"
    class="antialiased relative font-inter bg-white dark:bg-black text-black dark:text-white text-sm font-normal overflow-x-hidden vertical"
    :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.rightsidebar ? 'right-sidebar' : '', $store.app.menu, $store.app.layout]">

    <div x-cloak class="fixed inset-0 bg-[black]/60 z-40 lg:hidden" :class="{'hidden' : !$store.app.sidebar}"
        @click="$store.app.toggleSidebar()"></div>
    <div x-cloak class="fixed inset-0 bg-[black]/60 z-50 2xl:hidden" :class="{'hidden' : !$store.app.rightsidebar}"
        @click="$store.app.rightSidebar()"></div>

    <div class="main-container navbar-sticky flex" :class="[$store.app.navbar]">

        <!-- Navbar starts -->
        <?php include_once('includes/menu.php')?>
        <!-- Navbar ends -->

        <div class="main-content flex-1">

            <div class="border-b border-black/10 dark:border-white/10 py-[22px] px-7 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <button type="button" class="text-black dark:text-white" @click="$store.app.toggleSidebar()">
                        <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.125 20.25C6.95921 20.25 6.80029 20.1842 6.68303 20.067C6.56584 19.9497 6.5 19.7908 6.5 19.625V8.375C6.5 8.20921 6.56584 8.05029 6.68303 7.93303C6.80029 7.81584 6.95921 7.75 7.125 7.75H10.875V20.25H7.125Z"
                                fill="currentColor" fill-opacity="0.1" />
                            <path
                                d="M10.25 7.75V20.25C10.25 20.5952 10.5298 20.875 10.875 20.875C11.2202 20.875 11.5 20.5952 11.5 20.25V7.75C11.5 7.40482 11.2202 7.125 10.875 7.125C10.5298 7.125 10.25 7.40482 10.25 7.75Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.875 8.375C5.875 8.375 5.875 7.85723 6.24112 7.49112C6.24112 7.49112 6.60723 7.125 7.125 7.125H20.875C20.875 7.125 21.3928 7.125 21.7589 7.49112C21.7589 7.49112 22.125 7.85723 22.125 8.375V19.625C22.125 19.625 22.125 20.1428 21.7589 20.5089C21.7589 20.5089 21.3928 20.875 20.875 20.875H7.125C7.125 20.875 6.60723 20.875 6.24112 20.5089C6.24112 20.5089 5.875 20.1428 5.875 19.625V8.375ZM7.125 8.375V19.625H20.875V8.375H7.125Z"
                                fill="currentColor" />
                            <path
                                d="M6.5 10.875H8.375C8.72018 10.875 9 10.5952 9 10.25C9 9.90482 8.72018 9.625 8.375 9.625H6.5C6.15482 9.625 5.875 9.90482 5.875 10.25C5.875 10.5952 6.15482 10.875 6.5 10.875Z"
                                fill="currentColor" />
                            <path
                                d="M6.5 13.375H8.375C8.72018 13.375 9 13.0952 9 12.75C9 12.4048 8.72018 12.125 8.375 12.125H6.5C6.15482 12.125 5.875 12.4048 5.875 12.75C5.875 13.0952 6.15482 13.375 6.5 13.375Z"
                                fill="currentColor" />
                            <path
                                d="M6.5 15.875H8.375C8.72018 15.875 9 15.5952 9 15.25C9 14.9048 8.72018 14.625 8.375 14.625H6.5C6.15482 14.625 5.875 14.9048 5.875 15.25C5.875 15.5952 6.15482 15.875 6.5 15.875Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                    <div class="hidden sm:block">
                        <nav aria-label="breadcrumb" class="w-full py-1 px-1">
                            <div class="flex space-x-3">
                                <li class="flex items-center">
                                    <a href="javascript:void(0);"
                                        class="items-center text-decoration-none px-1 text-white">Dashboard</a>
                                </li>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    <form class="md:flex items-center hidden">
                        <label for="voice-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-[6px] pointer-events-none">
                                <svg class="text-black/20 dark:text-white/20" width="16" height="16" viewbox="0 0 16 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3496 14.3563C14.2563 14.4483 14.1306 14.4999 13.9996 14.5001C13.8668 14.4995 13.7393 14.4481 13.6434 14.3563L10.9434 11.6501C9.80622 12.6052 8.34425 13.0845 6.86236 12.9879C5.38046 12.8913 3.99306 12.2264 2.98951 11.1317C1.98596 10.0371 1.44375 8.59729 1.47597 7.1126C1.50818 5.62791 2.11233 4.21298 3.16241 3.1629C4.21249 2.11282 5.62743 1.50867 7.11212 1.47645C8.59681 1.44424 10.0366 1.98645 11.1313 2.99C12.2259 3.99355 12.8908 5.38095 12.9874 6.86285C13.084 8.34474 12.6047 9.80671 11.6496 10.9438L14.3496 13.6438C14.3969 13.6904 14.4344 13.7458 14.46 13.807C14.4856 13.8681 14.4988 13.9338 14.4988 14.0001C14.4988 14.0664 14.4856 14.132 14.46 14.1932C14.4344 14.2544 14.3969 14.3098 14.3496 14.3563ZM7.24961 12.0001C8.18907 12.0001 9.10743 11.7215 9.88857 11.1996C10.6697 10.6776 11.2785 9.93579 11.638 9.06784C11.9976 8.19989 12.0916 7.24483 11.9083 6.32342C11.7251 5.40201 11.2727 4.55564 10.6084 3.89134C9.94407 3.22704 9.0977 2.77465 8.17629 2.59137C7.25488 2.40809 6.29981 2.50215 5.43186 2.86167C4.56391 3.22119 3.82206 3.83001 3.30013 4.61114C2.77819 5.39227 2.49961 6.31064 2.49961 7.2501C2.50126 8.50937 3.00224 9.71659 3.89268 10.607C4.78312 11.4975 5.99034 11.9984 7.24961 12.0001Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <input type="text" id="voice-search"
                                class="bg-black/5 dark:bg-white/10 border-0 text-white  text-sm rounded-lg block max-w-[160px] w-full px-4 p-1 focus:ring-0 focus:outline-0"
                                placeholder="Search..." required />
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-2">
                                <svg aria-hidden="true"
                                    class="w-4 h-4 text-black/20 dark:text-white/20 hover:text-black dark:hover:text-white"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="flex items-center gap-2">
                        <div class="profile" x-data="dropdown" @click.outside="open = false">
                            <button type="button" class="flex items-center gap-1.5 xl:gap-0" @click="toggle()">
                                <img class="h-7 w-7 rounded-full xl:mr-2" src="assets/images/byewind-avatar.png"
                                    alt="Header Avatar" />
                                <span class="fw-medium hidden xl:block"><?php echo $admin[0]['name']?></span>
                                <svg class="w-4 h-4" width="32" height="32" viewbox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.70711 11.2929C6.51957 11.1054 6.26522 11 6 11C5.73478 11 5.48043 11.1054 5.29289 11.2929C5.10536 11.4804 5 11.7348 5 12C5 12.2652 5.10536 12.5196 5.29289 12.7071L15.2929 22.7071C15.6834 23.0976 16.3166 23.0976 16.7071 22.7071L26.7071 12.7071C26.8946 12.5196 27 12.2652 27 12C27 11.7348 26.8946 11.4804 26.7071 11.2929C26.5196 11.1054 26.2652 11 26 11C25.7348 11 25.4804 11.1054 25.2929 11.2929L16 20.5858L6.70711 11.2929Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms>
                                <li>
                                    <div class="flex items-center !p-1">
                                        <div class="flex-none"> <img class="h-7 w-7 rounded-full object-cover"
                                                src="assets/images/byewind-avatar.png" alt="image" /></div>
                                        <div class="pl-2">
                                            <h4 class="text-sm text-black dark:text-white font-medium leading-none">
                                                <?php echo $admin[0]['username']?></h4>
                                            <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                                                href="javaScript:;">
                                                <span class="__cf_email__"><?php echo $admin[0]['email']?></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="h-px bg-black/5 block my-1"></li>
                                <li>
                                    <a href="my-profile" class="text-decoration-none text-light flex items-center">
                                        <svg class="mr-2" width="16" height="16" viewbox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.5302 2.01101C9.32209 1.5 8 1.5 8 1.5C6.67791 1.5 5.46975 2.01101 5.46975 2.01101C4.30319 2.50442 3.40381 3.40381 3.40381 3.40381C2.50442 4.30319 2.01101 5.46975 2.01101 5.46975C1.5 6.67791 1.5 8 1.5 8C1.5 9.32209 2.01101 10.5302 2.01101 10.5302C2.50442 11.6968 3.40381 12.5962 3.40381 12.5962C3.47292 12.6653 3.54362 12.732 3.61524 12.7963C3.64144 12.8255 3.6712 12.8518 3.70408 12.8744C4.54254 13.5968 5.46975 13.989 5.46975 13.989C6.67791 14.5 8 14.5 8 14.5C9.32208 14.5 10.5302 13.989 10.5302 13.989C11.2699 13.6762 11.9021 13.2001 12.2658 12.8936C12.3187 12.8625 12.3646 12.8225 12.402 12.776C12.527 12.6654 12.5962 12.5962 12.5962 12.5962C13.4956 11.6968 13.989 10.5302 13.989 10.5302C14.5 9.32208 14.5 8 14.5 8C14.5 6.67791 13.989 5.46975 13.989 5.46975C13.4956 4.30319 12.5962 3.40381 12.5962 3.40381C11.6968 2.50442 10.5302 2.01101 10.5302 2.01101ZM5.85931 13.068C5.37768 12.8643 4.94974 12.5786 4.63779 12.3395C5.16504 11.5463 5.90752 11.0906 5.90752 11.0906C6.87031 10.4996 8 10.5 8 10.5C9.12969 10.5 10.0925 11.0906 10.0925 11.0906C10.6986 11.4626 11.1259 11.9997 11.3592 12.3466C10.7364 12.816 10.1407 13.068 10.1407 13.068C9.1193 13.5 8 13.5 8 13.5C6.8807 13.5 5.85931 13.068 5.85931 13.068ZM5.3844 10.2383C5.3844 10.2383 5.68577 10.0534 6.16384 9.8687C6.06604 9.79515 5.97038 9.71302 5.87868 9.62132C5.87868 9.62132 5 8.74264 5 7.5C5 7.5 5 6.25736 5.87868 5.37868C5.87868 5.37868 6.75736 4.5 8 4.5C8 4.5 9.24264 4.5 10.1213 5.37868C10.1213 5.37868 11 6.25736 11 7.5C11 7.5 11 8.74264 10.1213 9.62132C10.1213 9.62132 10.0184 9.72419 9.83332 9.85954C10.0931 9.957 10.3591 10.0809 10.6156 10.2383C10.6156 10.2383 11.4536 10.7527 12.1025 11.6545C12.3591 11.3557 12.7899 10.7982 13.068 10.1407C13.068 10.1407 13.5 9.1193 13.5 8C13.5 8 13.5 6.8807 13.068 5.85931C13.068 5.85931 12.6506 4.87238 11.8891 4.11091C11.8891 4.11091 11.1276 3.34945 10.1407 2.93201C10.1407 2.93201 9.1193 2.5 8 2.5C8 2.5 6.8807 2.5 5.85931 2.93201C5.85931 2.93201 4.87238 3.34945 4.11091 4.11091C4.11091 4.11091 3.34945 4.87238 2.93201 5.85931C2.93201 5.85931 2.5 6.8807 2.5 8C2.5 8 2.5 9.1193 2.93201 10.1407C2.93201 10.1407 3.27305 10.947 3.90091 11.6643C4.20734 11.236 4.70631 10.6545 5.3844 10.2383ZM9.41421 8.91421C8.82843 9.5 8 9.5 8 9.5C7.17157 9.5 6.58579 8.91421 6.58579 8.91421C6 8.32843 6 7.5 6 7.5C6 6.67157 6.58579 6.08579 6.58579 6.08579C7.17157 5.5 8 5.5 8 5.5C8.82843 5.5 9.41421 6.08579 9.41421 6.08579C10 6.67157 10 7.5 10 7.5C10 8.32843 9.41421 8.91421 9.41421 8.91421Z"
                                                fill="currentcolor" />
                                        </svg>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="my-profile" class="text-decoration-none text-light flex items-center">
                                        <svg class="mr-2" width="16" height="16" viewbox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8 4.49988C8 4.49988 9.44975 4.49988 10.4749 5.525C10.4749 5.525 11.5 6.55013 11.5 7.99988C11.5 7.99988 11.5 9.44963 10.4749 10.4748C10.4749 10.4748 9.44975 11.4999 8 11.4999C8 11.4999 6.55025 11.4999 5.52513 10.4748C5.52513 10.4748 4.5 9.44963 4.5 7.99988C4.5 7.99988 4.5 6.55013 5.52513 5.525C5.52513 5.525 6.55025 4.49988 8 4.49988ZM8 5.49988C8 5.49988 6.96447 5.49988 6.23223 6.23211C6.23223 6.23211 5.5 6.96434 5.5 7.99988C5.5 7.99988 5.5 9.03541 6.23223 9.76764C6.23223 9.76764 6.96447 10.4999 8 10.4999C8 10.4999 9.03553 10.4999 9.76777 9.76764C9.76777 9.76764 10.5 9.03541 10.5 7.99988C10.5 7.99988 10.5 6.96434 9.76777 6.23211C9.76777 6.23211 9.03553 5.49988 8 5.49988Z"
                                                fill="currentcolor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.8687 3.19582L12.8401 4.89469C12.8401 4.89469 12.9883 5.1222 13.1114 5.36418L14.593 6.1879C14.7177 6.25727 14.8069 6.37664 14.838 6.51595C14.838 6.51595 15.1689 7.99805 14.8447 9.48164C14.814 9.62214 14.7243 9.74262 14.5985 9.8123L13.1112 10.636C13.1112 10.636 12.9882 10.8778 12.8401 11.1051L12.8687 12.804C12.8711 12.9476 12.8117 13.0853 12.7055 13.182C12.7055 13.182 11.5845 14.2035 10.1411 14.6695C10.0038 14.7138 9.85401 14.6966 9.73027 14.6224L8.26872 13.7455C8.26872 13.7455 7.99985 13.7575 7.73098 13.7455L6.27551 14.6164C6.1528 14.6899 6.0045 14.7073 5.86813 14.6642C5.86813 14.6642 4.41829 14.2061 3.29448 13.182C3.18834 13.0852 3.12891 12.9475 3.13133 12.804L3.15997 11.1089C3.15997 11.1089 3.01267 10.8791 2.88888 10.6358L1.40705 9.8119C1.28229 9.74254 1.19313 9.62317 1.16203 9.48386C1.16203 9.48386 0.831119 8.00176 1.15529 6.51817C1.18599 6.37767 1.2757 6.25719 1.40151 6.18751L2.88881 5.36377C2.88881 5.36377 3.01187 5.122 3.15993 4.89469L3.13133 3.19582C3.12892 3.05224 3.18835 2.91455 3.29449 2.81783C3.29449 2.81783 4.41555 1.79626 5.85891 1.33033C5.99624 1.286 6.14602 1.30316 6.26976 1.37741L7.7313 2.25433C7.7313 2.25433 8.00017 2.2423 8.26904 2.25435L9.72451 1.38336C9.84723 1.30992 9.99552 1.29255 10.1319 1.33563C10.1319 1.33563 11.5817 1.79369 12.7056 2.81784C12.8117 2.91457 12.8711 3.05225 12.8687 3.19582ZM11.8376 5.03524L11.8649 3.41018C11.8649 3.41018 11.0485 2.71863 10.0405 2.35965L8.65051 3.19145C8.56249 3.24412 8.4604 3.26845 8.35809 3.26113C8.35809 3.26113 8.00001 3.23552 7.64194 3.26113C7.53942 3.26846 7.43714 3.24403 7.34901 3.19115L5.95456 2.35448C5.95456 2.35448 4.95017 2.71912 4.13508 3.41012L4.16244 5.03524C4.16421 5.14051 4.13271 5.24365 4.07242 5.32997C4.07242 5.32997 3.87088 5.6185 3.72147 5.93717C3.67677 6.0325 3.60312 6.11129 3.51101 6.1623L2.08866 6.95006C2.08866 6.95006 1.89913 8.00024 2.09377 9.04954L3.51173 9.8379C3.60314 9.88873 3.67631 9.96694 3.72094 10.0615C3.72094 10.0615 3.87359 10.385 4.07537 10.6804C4.13377 10.7658 4.16419 10.8673 4.16244 10.9708L4.1351 12.5896C4.1351 12.5896 4.95155 13.2812 5.95954 13.6402L7.34951 12.8084C7.43753 12.7557 7.53962 12.7314 7.64194 12.7387C7.64194 12.7387 8.00001 12.7643 8.35809 12.7387C8.4606 12.7313 8.56288 12.7558 8.65101 12.8087L10.0455 13.6453C10.0455 13.6453 11.0499 13.2807 11.8649 12.5897L11.8376 10.9646C11.8358 10.8593 11.8673 10.7562 11.9276 10.6698C11.9276 10.6698 12.1291 10.3813 12.2786 10.0626C12.3233 9.96731 12.3969 9.88852 12.489 9.83751L13.9114 9.04975C13.9114 9.04975 14.1009 7.99957 13.9063 6.95027L12.4883 6.1619C12.3965 6.11087 12.3231 6.03225 12.2786 5.93717C12.2786 5.93717 12.1291 5.61851 11.9276 5.32997C11.8673 5.24365 11.8358 5.14051 11.8376 5.03524Z"
                                                fill="currentcolor" />
                                        </svg>
                                        Settings
                                    </a>
                                </li>
                                <li class="h-px bg-black/5 block my-1"></li>
                                <li>
                                    <a href="logout" class="text-black dark:text-white flex items-center">
                                        <svg class="w-4 h-4 mr-2" width="32" height="32" viewbox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.5858 16L21.0433 20.5425C20.8557 20.7301 20.75 20.9848 20.75 21.25C20.75 21.266 20.7504 21.282 20.7512 21.298C20.7631 21.5464 20.8671 21.7813 21.0429 21.9571C21.2304 22.1446 21.4848 22.25 21.75 22.25C22.0152 22.25 22.2696 22.1446 22.4571 21.9571L27.7071 16.7071C27.8946 16.5196 28 16.2652 28 16C28 15.7348 27.8946 15.4804 27.7071 15.2929L22.4572 10.043C22.2696 9.85536 22.0152 9.75 21.75 9.75C21.4848 9.75 21.2304 9.85536 21.0429 10.0429C20.8554 10.2304 20.75 10.4848 20.75 10.75C20.75 11.0152 20.8554 11.2696 21.0429 11.4571L25.5858 16Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M13 17H27C27.5523 17 28 16.5523 28 16C28 15.4477 27.5523 15 27 15H13C12.4477 15 12 15.4477 12 16C12 16.5523 12.4477 17 13 17Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M6 6H13C13.5523 6 14 5.55228 14 5C14 4.44772 13.5523 4 13 4H6C5.17157 4 4.58579 4.58579 4.58579 4.58579C4 5.17157 4 6 4 6V26C4 26.8284 4.58579 27.4142 4.58579 27.4142C5.17157 28 6 28 6 28H13C13.5523 28 14 27.5523 14 27C14 26.4477 13.5523 26 13 26H6V6Z"
                                                fill="currentcolor" />
                                        </svg>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
                <div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
                    <div class="px-2 py-1 mb-4">
                        <p class="text-sm font-semibold text-black dark:text-white">Dashboard</p>
                    </div>
                    <div class="flex flex-col gap-7">
                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-7">
                            <div class="bg-lightblue-100 rounded-2xl p-6">
                                <?php 
                                $totalOrders = $db->getData("ourAttorneys");
                                $totalOrders = count($totalOrders);
                                ?>
                                <p class="text-sm font-semibold text-black mb-2">Our Attorneys</p>
                                <div class="flex items-center justify-between">
                                    <h2 class="text-2xl leading-9 font-semibold text-black"><?php echo $totalOrders?>
                                    </h2>
                                    <div class="flex items-center gap-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer
                    class="p-7 bg-white dark:bg-black flex flex-wrap items-center justify-center sm:justify-between gap-3">
                    <p class="text-xs text-black/40 dark:text-white/40">&copy; 2023 Snow</p>
                    <ul class="flex items-center text-black/40 dark:text-white/40 text-xs">
                        <li><a href="javascirpt:;"
                                class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">About</a>
                        </li>
                        <li><a href="javascirpt:;"
                                class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">Support</a>
                        </li>
                        <li><a href="javascirpt:;"
                                class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">Contact
                                Us</a></li>
                    </ul>
                </footer>
            </div>

        </div>

    </div>

    <?php include_once("includes/footer.php");?>
</body>

</html>