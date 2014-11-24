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
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_793f6ba77cf4e8a5d963fd5c095c876f.php">extlibs</a></li><li class="navelem"><a class="el" href="dir_68d8c18478ca54c694885cb8cbc52e5a.php">headers</a></li><li class="navelem"><a class="el" href="dir_1659f8737ee18542010349efee4175b2.php">libfreetype</a></li><li class="navelem"><a class="el" href="dir_8d72d6c3adad3bcfb58fa15e2b0d2e4e.php">windows</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">ft2build.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/***************************************************************************/</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">/*                                                                         */</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">/*  ft2build.h                                                             */</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">/*                                                                         */</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">/*    FreeType 2 build and setup macros.                                   */</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">/*    (Generic version)                                                    */</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">/*                                                                         */</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">/*  Copyright 1996-2001, 2006 by                                           */</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">/*  David Turner, Robert Wilhelm, and Werner Lemberg.                      */</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">/*                                                                         */</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">/*  This file is part of the FreeType project, and may only be used,       */</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">/*  modified, and distributed under the terms of the FreeType project      */</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">/*  license, LICENSE.TXT.  By continuing to use, modify, or distribute     */</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">/*  this file you indicate that you have read the license and              */</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">/*  understand and accept it fully.                                        */</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">/*                                                                         */</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">/***************************************************************************/</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;  <span class="comment">/*************************************************************************/</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;  <span class="comment">/*                                                                       */</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;  <span class="comment">/* This file corresponds to the default `ft2build.h&#39; file for            */</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;  <span class="comment">/* FreeType 2.  It uses the `freetype&#39; include root.                     */</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;  <span class="comment">/*                                                                       */</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;  <span class="comment">/* Note that specific platforms might use a different configuration.     */</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;  <span class="comment">/* See builds/unix/ft2unix.h for an example.                             */</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;  <span class="comment">/*                                                                       */</span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;  <span class="comment">/*************************************************************************/</span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#ifndef __FT2_BUILD_GENERIC_H__</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define __FT2_BUILD_GENERIC_H__</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;freetype/config/ftheader.h&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* __FT2_BUILD_GENERIC_H__ */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="comment">/* END */</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
