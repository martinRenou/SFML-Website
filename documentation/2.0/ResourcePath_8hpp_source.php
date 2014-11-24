<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
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
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_df0d69bcb0c0acbbb246f9a0b4583865.php">tools</a></li><li class="navelem"><a class="el" href="dir_bbb07ca6d3952d0a4a3552529c85c5fb.php">xcode</a></li><li class="navelem"><a class="el" href="dir_4682c91455e0f7766c0da310082b1151.php">templates</a></li><li class="navelem"><a class="el" href="dir_5c27f280043603f2842d27d503023adc.php">SFML</a></li><li class="navelem"><a class="el" href="dir_006481239e1af0657bc1640e03744cb5.php">SFML App.xctemplate</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">ResourcePath.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Marco Antognini (antognini.marco@gmail.com), </span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//                         Laurent Gomila (laurent.gom@gmail.com), </span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#ifndef RESOURCE_PATH_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define RESOURCE_PATH_HPP</span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;std::string resourcePath(<span class="keywordtype">void</span>);</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="preprocessor">#endif</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
