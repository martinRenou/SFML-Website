<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Color.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Color.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php">   40</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>();</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>(Uint8 red, Uint8 green, Uint8 blue, Uint8 alpha = 255);</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00067"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">   67</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd" title="Black predefined color.">Black</a>;       </div>
<div class="line"><a name="l00068"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca">   68</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca" title="White predefined color.">White</a>;       </div>
<div class="line"><a name="l00069"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a">   69</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a" title="Red predefined color.">Red</a>;         </div>
<div class="line"><a name="l00070"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865">   70</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865" title="Green predefined color.">Green</a>;       </div>
<div class="line"><a name="l00071"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c">   71</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c" title="Blue predefined color.">Blue</a>;        </div>
<div class="line"><a name="l00072"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7">   72</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7" title="Yellow predefined color.">Yellow</a>;      </div>
<div class="line"><a name="l00073"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c">   73</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c" title="Magenta predefined color.">Magenta</a>;     </div>
<div class="line"><a name="l00074"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340">   74</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340" title="Cyan predefined color.">Cyan</a>;        </div>
<div class="line"><a name="l00075"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a569b45471737f770656f50ae7bbac292">   75</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> <a class="code" href="classsf_1_1Color.php#a569b45471737f770656f50ae7bbac292" title="Transparent (black) predefined color.">Transparent</a>; </div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00080"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1">   80</a></span>&#160;<span class="comment"></span>    Uint8 <a class="code" href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1" title="Red component.">r</a>; </div>
<div class="line"><a name="l00081"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5">   81</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5" title="Green component.">g</a>; </div>
<div class="line"><a name="l00082"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb">   82</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb" title="Blue component.">b</a>; </div>
<div class="line"><a name="l00083"></a><span class="lineno"><a class="code" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">   83</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831" title="Alpha (opacity) component.">a</a>; </div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;};</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a> operator *(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; operator +=(<a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; operator *=(<a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Utility class for manpulating RGBA colors.">Color</a>&amp; right);</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;<span class="preprocessor">#endif // SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;</div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
