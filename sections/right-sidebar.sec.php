<!--Right Sidebar Holder -->
        <nav id="sidebar-right" class="active">
            <div class="sidebar-header">
                <h3><i class="fa fa-cog"></i> SETĂRI</h3>
            </div>
            <?php
            $text=$_SERVER['PHP_SELF'];
            $rest = substr("$text", 1);
            echo '<ul class="list-unstyled components">';
            if ($rest === 'cont.php') {
                echo '<li class="active">
                        <a href="#secondarySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user"></i> Cont</a>
                        <ul class="collapse list-unstyled" id="secondarySubmenu">
                            <li>
                                <a href="cont.php"><i class="fa fa-user"></i> Contul meu</a>
                            </li>
                            <li>
                                <a href="cont.php"><i class="fa fa-cog"></i> Setări</a>
                            </li>
                        </ul>
                    </li>';  
            } else {
                echo '<li>
                        <a href="#secondarySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user"></i> Cont</a>
                        <ul class="collapse list-unstyled" id="secondarySubmenu">
                            <li>
                                <a href="cont.php"><i class="fa fa-user"></i> Contul meu</a>
                            </li>
                            <li>
                                <a href="cont.php"><i class="fa fa-cog"></i> Setări</a>
                            </li>
                        </ul>
                    </li>';
            }
            if ($rest === 'transport.php') {
                echo '<li class="active">
                        <a href="transport.php"><i class="fa fa-truck"></i> Transport</a>
                    </li>';  
            } else {
                echo '<li>
                        <a href="transport.php"><i class="fa fa-truck"></i> Transport</a>
                    </li>';
            }
            if ($rest === 'info.php') {
                echo '<li class="active">
                        <a href="info.php"><i class="fa fa-info-circle"></i> Informații utile</a>
                    </li>';  
            } else {
                echo '<li>
                        <a href="info.php"><i class="fa fa-info-circle"></i> Informații utile</a>
                    </li>';
            }
            if ($rest === 'index.php#contact') {
                echo '<li class="active">
                    <a href="index.php#contact"><i class="fa fa-address-book"></i> Contact</a>
                </li>';  
            } else {
                echo '<li>
                    <a href="index.php#contact"><i class="fa fa-address-book"></i> Contact</a>
                </li>';
            }
            echo '</ul>';
            ?>
        </nav>