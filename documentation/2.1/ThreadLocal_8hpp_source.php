<?php
    $version = '2.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'ThreadLocal.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_60c5c649f8df3b69a45a020d59f81335.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">ThreadLocal.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_THREADLOCAL_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_THREADLOCAL_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;cstdlib&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;    <span class="keyword">class </span>ThreadLocalImpl;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;}</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="code" href="classsf_1_1ThreadLocal.php">   47</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1ThreadLocal.php" title="Defines variables with thread-local storage.">ThreadLocal</a> : <a class="code" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">NonCopyable</a></div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    <a class="code" href="classsf_1_1ThreadLocal.php" title="Defines variables with thread-local storage.">ThreadLocal</a>(<span class="keywordtype">void</span>* value = NULL);</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    ~<a class="code" href="classsf_1_1ThreadLocal.php" title="Defines variables with thread-local storage.">ThreadLocal</a>();</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="keywordtype">void</span> setValue(<span class="keywordtype">void</span>* value);</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    <span class="keywordtype">void</span>* getValue() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;<span class="comment"></span>    priv::ThreadLocalImpl* m_impl; </div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;};</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;<span class="preprocessor">#endif // SFML_THREADLOCAL_HPP</span></div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
