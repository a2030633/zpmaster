    <!-- 导航 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/zpmaster/index.php">Logo</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/zpmaster/index.php">首页</a></li>
                    <li><a href="/zpmaster/personal/personal.php">个人中心</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                   <div class="dropdown">
                       <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <?php
                           echo $_SESSION['membername'];
                           ?>
                       </button>
                       <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                           <li><a href="/zpmaster/personal/personal.php">个人中心</a></li>
                           <li><a href="/zpmaster/personal/deliver.php">投递箱</a></li>
                           <li><a href="/zpmaster/personal/setting.php">修改密码</a></li>
                           <li><a href="/zpmaster/doAction.php?act=logout">退出</a></li>
                       </ul>
                   </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 导航结束 -->