<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <?php foreach ($sidebar as $side_row) { ?>
                <li class="menu-title" data-key="t-menu">
                    <?= $side_row['section']; ?>
                </li>
                <?php foreach ($side_row['routes'] as $r_key => $r) { ?>
                <li>
                    <?php if ($r['type'] && $r['type'] == "submenu") { ?>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="<?= $r['icon']; ?>"></i>
                        <span data-key="t-submenu<?= $r_key; ?>">
                            <?= $r['name']; ?>
                        </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php foreach ($r['items'] as $k_sr => $s_r) { ?>
                        <li>
                            <a href="{{$s_r['url']}}}">
                                <span data-key="t-s_t<?= $k_sr; ?>">
                                    <?= $s_r['name']; ?>
                                </span>
                            </a>
                        </li>

                        <?php } ?>

                    </ul>
                    <?php } else { ?>

                    <a href="{{$r['url']}}">
                        <i data-feather="<?= $r['icon']; ?>"></i>
                        <span data-key="t-title<?= $r_key; ?>">
                            <?= $r['name']; ?>
                        </span>
                    </a>

                    <?php } ?>
                </li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>