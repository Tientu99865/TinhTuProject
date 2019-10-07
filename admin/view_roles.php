<?php
include "check_login.php";
$account = $_SESSION['user_account'];
$permission = 'delete_role';
$permission1 = 'edit_role';
$permission2 = 'add_role';

include "admin_header.php";
include "admin_navbar.php";
include "admin_partial.php";
include "admin_sidebar.php";
include('../includes/mysqli_connect.php');
include('../includes/functions.php');

if (isset($_GET['msg'])){
    $msg = $_GET['msg'];
}else{
    $msg= '';
}if (isset($_GET['suc'])){
    $suc = $_GET['suc'];
}else{
    $suc= '';
}

?>

<div class="main-panel">
    <div class="content-wrapper">

        <?php
        if (!empty($msg) && ($suc==0)){
            echo "
                    <div class=\"card card-inverse-warning\" id=\"context-menu-access\">
                        <div class=\"card-body\">
                          <p class=\"card-text\" style='text-align: center;'>{$msg}</p>
                        </div>
                    </div>";
        } elseif(!empty($msg) && ($suc==1)){
            echo "
                    <div class=\"card card-inverse-success\" id=\"context-menu-access\">
                        <div class=\"card-body\">
                          <p class=\"card-text\" style='text-align: center;'>{$msg}</p>
                        </div>
                    </div>";
        }//neu có lỗi hoac thanh cong thì thông báo ra màn hình
        ?>

        <div class="row grid-margin">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;font-size: 30px;">Danh sách chức vụ</h4>
                        <div id="js-grid" class="jsgrid" style="position: relative; height: 500px; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 30px;">
                                            #
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                            style="width: 120px;">
                                            Chức vụ
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 150px;">
                                            Phân quyền
                                        </th>

                                        <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center"
                                            style="width: 50px;">
                                            <?php
                                            if (has_permission($account,$permission2)){
                                                echo "<a href=\"add_role.php\"><input class=\"jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button\" type=\"button\" title=\"Thêm chức vụ\"></a>";
                                            }
                                            ?>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="jsgrid-grid-body" style="height: 307.625px;">

                                <table class="jsgrid-table">
                                    <tbody>
                                    <?php
                                    $q1 = "SELECT * FROM roles ORDER BY role_id ASC ";
                                    $r1 = mysqli_query($dbc, $q1);
                                    confirm_query($r1, $q1);
                                    $stt=0;
                                    while ($role = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {

                                        $stt+=1;
                                        echo "
                                        <tr class=\"jsgrid-row\">
                                            <td class=\"jsgrid-cell jsgrid-align-center\" style=\"width: 30px;\">".$stt."</td>
                                            <td class=\"jsgrid-cell jsgrid-align-center\" style=\"width: 120px;\">".$role['role']."</td>
                                            <td class=\"jsgrid-cell jsgrid-align-center\" style=\"width: 150px;\">".$role['permission']."</td>
                                            <td class=\"jsgrid-cell jsgrid-control-field jsgrid-align-center\"
                                                style=\"width: 50px;\">";
                                        if (has_permission($account,$permission1)){
                                            echo "<a href='edit_role.php?rid={$role['role_id']}'><input class='jsgrid-button jsgrid-edit-button' type='button' title='Hủy'></a>";
                                        }
                                        if (has_permission($account,$permission)){
                                            if ($role['role'] != 'User'){
                                                echo "<a href='delete_role.php?rid={$role['role_id']}'><input class='jsgrid-button jsgrid-delete-button' type='button' title='Xóa'></a>";
                                            }
                                        }


                                                echo "
                                            </td>
                                        </tr>
                                        ";
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="jsgrid-pager-container">
                                <div class="jsgrid-pager">Pages: <span
                                        class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                            href="javascript:void(0);">First</a></span> <span
                                        class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                            href="javascript:void(0);">Prev</a></span> <span
                                        class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span><span
                                        class="jsgrid-pager-nav-button"><a href="javascript:void(0);">...</a></span>
                                    <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span>
                                    <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span>
                                    &nbsp;&nbsp; 1 of 7
                                </div>
                            </div>
                            <div class="jsgrid-load-shader"
                                 style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;"></div>
                            <div class="jsgrid-load-panel"
                                 style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please,
                                wait...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<?php include "admin_end.php" ?>;
