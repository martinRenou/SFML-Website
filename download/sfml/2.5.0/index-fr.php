<?php
    $breadcrumbs = array
    (
        'Téléchargement' => 'download-fr.php',
        'SFML 2.5.0' => 'download/sfml/2.5.0/index-fr.php'
    );
    include('../../../header-fr.php');

    function download_link($compiler, $arch, $size, $link)
    {
        $counter_script = "_gaq.push(['_trackEvent', 'Download', 'SFML 2.5.0']);";
        echo '<span class="description">' . $compiler . ' - ' . $arch . '</span><a href="' . $link . '" onclick="' . $counter_script . '">Télécharger<span class="size">' . $size . ' Mo</span></a>';
    }
?>

<h1>Télécharger SFML 2.5.0</h1>

<table class="styled download">
    <tbody>
        <tr>
            <td class="notice" colspan="3">
                Sous Windows, choisir les bibliothèques 32 ou 64-bit doit se baser sur la plateforme pour laquelle vous voulez compiler, et non sur l'OS que vous avez.
                En effet, un Windows 64-bit peut parfaitement compiler et faire tourner un programme 32-bit. Vous voudrez donc très certainement utiliser les
                packages 32-bit, afin de cibler une audience la plus large possible. Choisissez les packages 64-bit uniquement si vous avez de bonnes raisons.<br>
                <div class="important">
                    <strong>La version du compilateur doit correspondre à 100% !</strong><br>
                    Voici les liens vers les versions du compilateur MinGW qui ont été utilisées pour compiler les paquets fournis :<br>
                    <a href="https://sourceforge.net/projects/tdm-gcc/files/TDM-GCC%20Installer/tdm-gcc-5.1.0-3.exe/download">TDM 5.1.0 (32-bit)</a>,
                    <a href="https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/7.3.0/threads-posix/dwarf/i686-7.3.0-release-posix-dwarf-rt_v5-rev0.7z/download">MinGW Builds 7.3.0 (32-bit)</a>,
                    <a href="https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/mingw-builds/7.3.0/threads-posix/seh/x86_64-7.3.0-release-posix-seh-rt_v5-rev0.7z/download">MinGW Builds 7.3.0 (64-bit)</a>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 15 (2017)', '32-bit', '17.8', '../../../files/SFML-2.5.0-windows-vc15-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 15 (2017)', '64-bit', '19.4', '../../../files/SFML-2.5.0-windows-vc15-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 14 (2015)', '32-bit', '17.6', '../../../files/SFML-2.5.0-windows-vc14-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 14 (2015)', '64-bit', '19.4', '../../../files/SFML-2.5.0-windows-vc14-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 12 (2013)', '32-bit', '17.8', '../../../files/SFML-2.5.0-windows-vc12-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 12 (2013)', '64-bit', '19.6', '../../../files/SFML-2.5.0-windows-vc12-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 5.1.0 TDM (SJLJ) - Code::Blocks', '32-bit', '15.6', '../../../files/SFML-2.5.0-windows-gcc-5.1.0-tdm-32-bit.zip') ?></td>
            <td></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 7.3.0 MinGW (DW2)', '32-bit', '17.0', '../../../files/SFML-2.5.0-windows-gcc-7.3.0-mingw-32-bit.zip') ?></td>
            <td><?php download_link('GCC 7.3.0 MinGW (SEH)', '64-bit', '17.9', '../../../files/SFML-2.5.0-windows-gcc-7.3.0-mingw-64-bit.zip') ?></td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="notice" colspan="3">
                Si vous possédez un Linux 64-bit alors vous avez la chaîne d'outils 64-bit installée par défaut. Compiler en 32-bit est possible, mais vous aurez à installer
                des paquets spécifiques et/ou utiliser des options de compilation spécifiques. Télécharger les bibliothèques 64-bit est donc la solution la plus simple si
                vous utilisez un Linux 64-bit.<br />
                Si vous avez besoin d'une version 32-bit de SFML, il vous faudra <a href="/tutorials/2.4/compile-with-cmake-fr.php">compiler la bibliothèque vous-même</a>.
                <div class="important">
                    Il est recommandé d'utiliser la version de SFML fournie par votre gestionnaire de paquets (si elle est suffisamment récente), ou de compiler SFML depuis ses sources pour éviter des problèmes d'incompatibilité.
                </div>
            </td>
        </tr>
        <tr>
            <td class="os" rowspan="2">Linux</td>
            <td><?php download_link('GCC', '64-bit', '15.5', '../../../files/SFML-2.5.0-linux-gcc-64-bit.tar.gz') ?></td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="2">macOS</td>
            <td><?php download_link('Clang', '64-bit (OS X 10.7+, compatible C++11 et libc++)', '5.9', '../../../files/SFML-2.5.0-macos-clang.tar.gz') ?></td>
        </tr>
        <tr>
            <td class="notice" colspan="3">
                Les bibliothèques macOS sont uniquement compatible avec les systèmes 64-bit.
            </td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="2">Tous OS</td>
            <td><span class="description">Code source</span><a href="../../../files/SFML-2.5.0-sources.zip">Télécharger<span class="size">22.2 Mo</span></a></td>
        </tr>
        <tr>
            <td><span class="description">Documentation HTML</span><a href="../../../files/SFML-2.5.0-doc.zip">Télécharger<span class="size">1.53 Mo</span></a></td>
        </tr>
    </tbody>
</table>

<?php
    require("../../../footer.php");
?>
