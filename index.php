<?php
    $CONFIG = [
        'TITLE' => 'macOS Releases',
        'SHOW_DIRECTORY_CONTENTS' => false,
        'PATH' => './',
        'SHOW_MANUAL_ITEMS' => true,
        'OPEN_LINKS_IN_NEW_TAB' => true,
        'ITEMS' => [
            [
                'label' => 'Mac OS X Public Beta',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_Public_Beta'
            ],
            [
                'label' => 'Mac OS X 10.0 (Cheetah)',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.0_(Cheetah)'
            ],
            [
                'label' => 'Mac OS X 10.1 (Puma)',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.1_(Puma)'
            ],
            [
                'label' => 'Mac OS X 10.2 Jaguar',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.2_Jaguar'
            ],
            [
                'label' => 'Mac OS X 10.3 Panther',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.3_Panther'
            ],
            [
                'label' => 'Mac OS X 10.4 Tiger',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.4_Tiger'
            ],
            [
                'label' => 'Mac OS X 10.5 Leopard',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.5_Leopard'
            ],
            [
                'label' => 'Mac OS X 10.6 Snow Leopard',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#Mac_OS_X_10.6_Snow_Leopard'
            ],
            [
                'label' => 'OS X 10.7 Lion',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#OS_X_10.7_Lion'
            ],
            [
                'label' => 'OS X 10.8 Mountain Lion',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#OS_X_10.8_Mountain_Lion'
            ],
            [
                'label' => 'OS X 10.9 Mavericks',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#OS_X_10.9_Mavericks'
            ],
            [
                'label' => 'OS X 10.10 Yosemite',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#OS_X_10.10_Yosemite'
            ],
            [
                'label' => 'OS X 10.11 El Capitan',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#OS_X_10.11_El_Capitan'
            ],
            [
                'label' => 'macOS 10.12 Sierra',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_10.12_Sierra'
            ],
            [
                'label' => 'macOS 10.13 High Sierra',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_10.13_High_Sierra'
            ],
            [
                'label' => 'macOS 10.14 Mojave',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_10.14_Mojave'
            ],
            [
                'label' => 'macOS 10.15 Catalina',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_10.15_Catalina'
            ],
            [
                'label' => 'macOS 11 Big Sur',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_11_Big_Sur'
            ],
            [
                'label' => 'macOS 12 Monterey',
                'link' => 'https://en.wikipedia.org/wiki/MacOS#macOS_12_Monterey'
            ]
        ],
        'STYLE' => [
            'BULLETS' => true,
            'BULLET_STYLE' => '\002192'
        ]
    ];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $CONFIG['TITLE']; ?></title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<style>
		    * {
			-webkit-font-smoothing: antialiased;
		    }

		    html, body {
			margin: 20px;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
		    }

		    h1 {
			font-size: 24px;
			margin: 0 0 30px 0;
		    }

		    ul {
			list-style-type: none;
			list-style-position: inside;
			margin: 0;
			padding: 0;
		    }

		    li {
			font-size: 16px;
			list-style-type: none;
			list-style-position: inside;
			padding: 8px 0 8px 0;
			margin: 0;
			display: block;
			width: fit-content;
		    }

		    <?php if ($CONFIG['STYLE']['BULLETS']) { ?>
		    li:before {
			font-size: 14px;
			color: rgba(0, 0, 0, 0.5);
			content: '<?php echo $CONFIG['STYLE']['BULLET_STYLE']; ?>';
			margin-right: 8px;
			transition: all 0.3s;
		    }
		    <?php } ?>

		    li:hover a, li:hover:before {
			color: rgba(0, 0, 0, 1);
		    }

		    a {
			color: rgba(0, 0, 0, 0.5);
			transition: all 0.3s;
			padding: 8px 0 8px 0;
		    }

		    @media (prefers-color-scheme: dark) {
			html, body {
			    background-color: #1A1A1A;
			    color: #FFFFFF;
			}

			li:before, a {
			    color: rgba(255, 255, 255, 0.5);
			}

			li:hover a, li:hover:before {
			    color: rgba(255, 255, 255, 1);
			}
		    }
		</style>
	</head>
	<body>
		<h1><?php echo $CONFIG['TITLE']; ?></h1>
		<ul>
		    <?php
			$linkAttributes = '';

			if ($CONFIG['OPEN_LINKS_IN_NEW_TAB']) {
			    $linkAttributes .= ' target="_blank"';
			    $linkAttributes .= ' rel="nofollow noopener noreferrer"';
			}

			if ($CONFIG['SHOW_DIRECTORY_CONTENTS']) {
			    $files = scandir($CONFIG['PATH']);

			    $hiddenFiles = [
				'.',
				'..',
				'index.php',
				'.DS_Store',
				'.git',
				'.gitignore'
			    ];

			    foreach ($files as &$file) {
				if (!in_array($file, $hiddenFiles)) {
				    echo "<li><a".$linkAttributes." href='".$CONFIG['PATH'].$file."'>".$file."</a></li>";
				}
			    }
			}

			if ($CONFIG['SHOW_MANUAL_ITEMS'] && $CONFIG['ITEMS']) {
			    foreach ($CONFIG['ITEMS'] as &$item) {
				echo "<li><a".$linkAttributes." href='".$item['link']."'>".$item['label']."</a></li>";
			    }
			}
		    ?>
		</ul>
	</body>
</html>
