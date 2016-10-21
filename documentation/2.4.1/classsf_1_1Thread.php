<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Thread Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Thread.php">Thread</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Thread-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Thread Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Utility class to manipulate threads.  
 <a href="classsf_1_1Thread.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="include_2SFML_2System_2Thread_8hpp_source.php">Thread.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Thread:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Thread.png" usemap="#sf::Thread_map" alt=""/>
  <map id="sf::Thread_map" name="sf::Thread_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="115,0,220,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a4cc65399bbb111cf8132537783b8e96c"><td class="memTemplParams" colspan="2">template&lt;typename F &gt; </td></tr>
<tr class="memitem:a4cc65399bbb111cf8132537783b8e96c"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a4cc65399bbb111cf8132537783b8e96c">Thread</a> (F function)</td></tr>
<tr class="memdesc:a4cc65399bbb111cf8132537783b8e96c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a functor with no argument.  <a href="#a4cc65399bbb111cf8132537783b8e96c">More...</a><br /></td></tr>
<tr class="separator:a4cc65399bbb111cf8132537783b8e96c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a719b2cc067d92d52c35064a49d850a53"><td class="memTemplParams" colspan="2">template&lt;typename F , typename A &gt; </td></tr>
<tr class="memitem:a719b2cc067d92d52c35064a49d850a53"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a719b2cc067d92d52c35064a49d850a53">Thread</a> (F function, A argument)</td></tr>
<tr class="memdesc:a719b2cc067d92d52c35064a49d850a53"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a functor with an argument.  <a href="#a719b2cc067d92d52c35064a49d850a53">More...</a><br /></td></tr>
<tr class="separator:a719b2cc067d92d52c35064a49d850a53"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memTemplParams" colspan="2">template&lt;typename C &gt; </td></tr>
<tr class="memitem:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#aa9f473c8cbb078900c62b1fd14a83a34">Thread</a> (void(C::*function)(), C *object)</td></tr>
<tr class="memdesc:aa9f473c8cbb078900c62b1fd14a83a34"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a member function and an object.  <a href="#aa9f473c8cbb078900c62b1fd14a83a34">More...</a><br /></td></tr>
<tr class="separator:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af77942fc1730af7c31bc4c3a913a9c1d"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#af77942fc1730af7c31bc4c3a913a9c1d">~Thread</a> ()</td></tr>
<tr class="memdesc:af77942fc1730af7c31bc4c3a913a9c1d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#af77942fc1730af7c31bc4c3a913a9c1d">More...</a><br /></td></tr>
<tr class="separator:af77942fc1730af7c31bc4c3a913a9c1d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a74f75a9e86e1eb47479496314048b5f6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6">launch</a> ()</td></tr>
<tr class="memdesc:a74f75a9e86e1eb47479496314048b5f6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Run the thread.  <a href="#a74f75a9e86e1eb47479496314048b5f6">More...</a><br /></td></tr>
<tr class="separator:a74f75a9e86e1eb47479496314048b5f6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a724b1f94c2d54f84280f2f78bde95fa0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a724b1f94c2d54f84280f2f78bde95fa0">wait</a> ()</td></tr>
<tr class="memdesc:a724b1f94c2d54f84280f2f78bde95fa0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wait until the thread finishes.  <a href="#a724b1f94c2d54f84280f2f78bde95fa0">More...</a><br /></td></tr>
<tr class="separator:a724b1f94c2d54f84280f2f78bde95fa0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#ad6b205d4f1ce38b8d44bba0f5501477c">terminate</a> ()</td></tr>
<tr class="memdesc:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Terminate the thread.  <a href="#ad6b205d4f1ce38b8d44bba0f5501477c">More...</a><br /></td></tr>
<tr class="separator:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4cc65399bbb111cf8132537783b8e96c"><td class="memTemplParams" colspan="2">template&lt;typename F &gt; </td></tr>
<tr class="memitem:a4cc65399bbb111cf8132537783b8e96c"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a4cc65399bbb111cf8132537783b8e96c">Thread</a> (F function)</td></tr>
<tr class="memdesc:a4cc65399bbb111cf8132537783b8e96c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a functor with no argument.  <a href="#a4cc65399bbb111cf8132537783b8e96c">More...</a><br /></td></tr>
<tr class="separator:a4cc65399bbb111cf8132537783b8e96c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a719b2cc067d92d52c35064a49d850a53"><td class="memTemplParams" colspan="2">template&lt;typename F , typename A &gt; </td></tr>
<tr class="memitem:a719b2cc067d92d52c35064a49d850a53"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a719b2cc067d92d52c35064a49d850a53">Thread</a> (F function, A argument)</td></tr>
<tr class="memdesc:a719b2cc067d92d52c35064a49d850a53"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a functor with an argument.  <a href="#a719b2cc067d92d52c35064a49d850a53">More...</a><br /></td></tr>
<tr class="separator:a719b2cc067d92d52c35064a49d850a53"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memTemplParams" colspan="2">template&lt;typename C &gt; </td></tr>
<tr class="memitem:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#aa9f473c8cbb078900c62b1fd14a83a34">Thread</a> (void(C::*function)(), C *object)</td></tr>
<tr class="memdesc:aa9f473c8cbb078900c62b1fd14a83a34"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the thread from a member function and an object.  <a href="#aa9f473c8cbb078900c62b1fd14a83a34">More...</a><br /></td></tr>
<tr class="separator:aa9f473c8cbb078900c62b1fd14a83a34"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af77942fc1730af7c31bc4c3a913a9c1d"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#af77942fc1730af7c31bc4c3a913a9c1d">~Thread</a> ()</td></tr>
<tr class="memdesc:af77942fc1730af7c31bc4c3a913a9c1d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#af77942fc1730af7c31bc4c3a913a9c1d">More...</a><br /></td></tr>
<tr class="separator:af77942fc1730af7c31bc4c3a913a9c1d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a74f75a9e86e1eb47479496314048b5f6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6">launch</a> ()</td></tr>
<tr class="memdesc:a74f75a9e86e1eb47479496314048b5f6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Run the thread.  <a href="#a74f75a9e86e1eb47479496314048b5f6">More...</a><br /></td></tr>
<tr class="separator:a74f75a9e86e1eb47479496314048b5f6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a724b1f94c2d54f84280f2f78bde95fa0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#a724b1f94c2d54f84280f2f78bde95fa0">wait</a> ()</td></tr>
<tr class="memdesc:a724b1f94c2d54f84280f2f78bde95fa0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wait until the thread finishes.  <a href="#a724b1f94c2d54f84280f2f78bde95fa0">More...</a><br /></td></tr>
<tr class="separator:a724b1f94c2d54f84280f2f78bde95fa0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Thread.php#ad6b205d4f1ce38b8d44bba0f5501477c">terminate</a> ()</td></tr>
<tr class="memdesc:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Terminate the thread.  <a href="#ad6b205d4f1ce38b8d44bba0f5501477c">More...</a><br /></td></tr>
<tr class="separator:ad6b205d4f1ce38b8d44bba0f5501477c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Utility class to manipulate threads. </p>
<p>Threads provide a way to run multiple parts of the code in parallel.</p>
<p>When you launch a new thread, the execution is split and both the new thread and the caller run in parallel.</p>
<p>To use a <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a>, you construct it directly with the function to execute as the entry point of the thread. <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a> has multiple template constructors, which means that you can use several types of entry points: </p><ul>
<li>non-member functions with no argument </li>
<li>non-member functions with one argument of any type </li>
<li>functors with no argument (this one is particularly useful for compatibility with boost/std::bind) </li>
<li>functors with one argument of any type </li>
<li>member functions from any class with no argument</li>
</ul>
<p>The function argument, if any, is copied in the <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a> instance, as well as the functor (if the corresponding constructor is used). Class instances, however, are passed by pointer so you must make sure that the object won't be destroyed while the thread is still using it.</p>
<p>The thread ends when its function is terminated. If the owner <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a> instance is destroyed before the thread is finished, the destructor will wait (see <a class="el" href="classsf_1_1Thread.php#a724b1f94c2d54f84280f2f78bde95fa0" title="Wait until the thread finishes. ">wait()</a>)</p>
<p>Usage examples: </p><div class="fragment"><div class="line"><span class="comment">// example 1: non member function with one argument</span></div>
<div class="line"></div>
<div class="line"><span class="keywordtype">void</span> threadFunc(<span class="keywordtype">int</span> argument)</div>
<div class="line">{</div>
<div class="line">    ...</div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><a class="code" href="classsf_1_1Thread.php">sf::Thread</a> thread(&amp;threadFunc, 5);</div>
<div class="line">thread.launch(); <span class="comment">// start the thread (internally calls threadFunc(5))</span></div>
</div><!-- fragment --><div class="fragment"><div class="line"><span class="comment">// example 2: member function</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">class </span>Task</div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span>:</div>
<div class="line">    <span class="keywordtype">void</span> run()</div>
<div class="line">    {</div>
<div class="line">        ...</div>
<div class="line">    }</div>
<div class="line">};</div>
<div class="line"></div>
<div class="line">Task task;</div>
<div class="line"><a class="code" href="classsf_1_1Thread.php">sf::Thread</a> thread(&amp;Task::run, &amp;task);</div>
<div class="line">thread.launch(); <span class="comment">// start the thread (internally calls task.run())</span></div>
</div><!-- fragment --><div class="fragment"><div class="line"><span class="comment">// example 3: functor</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">struct </span>Task</div>
<div class="line">{</div>
<div class="line">    <span class="keywordtype">void</span> operator()()</div>
<div class="line">    {</div>
<div class="line">        ...</div>
<div class="line">    }</div>
<div class="line">};</div>
<div class="line"></div>
<div class="line"><a class="code" href="classsf_1_1Thread.php">sf::Thread</a> thread(Task());</div>
<div class="line">thread.launch(); <span class="comment">// start the thread (internally calls operator() on the Task instance)</span></div>
</div><!-- fragment --><p>Creating parallel threads of execution can be dangerous: all threads inside the same process share the same memory space, which means that you may end up accessing the same variable from multiple threads at the same time. To prevent this kind of situations, you can use mutexes (see <a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">sf::Mutex</a>).</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">sf::Mutex</a> </dd></dl>

<p>Definition at line <a class="el" href="include_2SFML_2System_2Thread_8hpp_source.php#l00048">48</a> of file <a class="el" href="include_2SFML_2System_2Thread_8hpp_source.php">include/SFML/System/Thread.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a4cc65399bbb111cf8132537783b8e96c"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename F &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">F&#160;</td>
          <td class="paramname"><em>function</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a functor with no argument. </p>
<p>This constructor works for function objects, as well as free functions.</p>
<p>Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>();</div>
<div class="line"></div>
<div class="line"><span class="comment">// --- or ----</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">struct </span>Functor</div>
<div class="line">{</div>
<div class="line">    <span class="keywordtype">void</span> operator()();</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Functor or free function to use as the entry point of the thread </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a719b2cc067d92d52c35064a49d850a53"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename F , typename A &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">F&#160;</td>
          <td class="paramname"><em>function</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">A&#160;</td>
          <td class="paramname"><em>argument</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a functor with an argument. </p>
<p>This constructor works for function objects, as well as free functions. It is a template, which means that the argument can have any type (int, std::string, void*, Toto, ...).</p>
<p>Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>(<span class="keywordtype">int</span> arg);</div>
<div class="line"></div>
<div class="line"><span class="comment">// --- or ----</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">struct </span>Functor</div>
<div class="line">{</div>
<div class="line">    <span class="keywordtype">void</span> operator()(std::string arg);</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Functor or free function to use as the entry point of the thread </td></tr>
    <tr><td class="paramname">argument</td><td>argument to forward to the function </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aa9f473c8cbb078900c62b1fd14a83a34"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename C &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">void(C::*)()&#160;</td>
          <td class="paramname"><em>function</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">C *&#160;</td>
          <td class="paramname"><em>object</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a member function and an object. </p>
<p>This constructor is a template, which means that you can use it with any class. Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MyClass</div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span>:</div>
<div class="line"></div>
<div class="line">    <span class="keywordtype">void</span> <span class="keyword">function</span>();</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Entry point of the thread </td></tr>
    <tr><td class="paramname">object</td><td>Pointer to the object to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="af77942fc1730af7c31bc4c3a913a9c1d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::~Thread </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>This destructor calls <a class="el" href="classsf_1_1Thread.php#a724b1f94c2d54f84280f2f78bde95fa0" title="Wait until the thread finishes. ">wait()</a>, so that the internal thread cannot survive after its <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a> instance is destroyed. </p>

</div>
</div>
<a class="anchor" id="a4cc65399bbb111cf8132537783b8e96c"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename F &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">F&#160;</td>
          <td class="paramname"><em>function</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a functor with no argument. </p>
<p>This constructor works for function objects, as well as free functions.</p>
<p>Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>();</div>
<div class="line"></div>
<div class="line"><span class="comment">// --- or ----</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">struct </span>Functor</div>
<div class="line">{</div>
<div class="line">    <span class="keywordtype">void</span> operator()();</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Functor or free function to use as the entry point of the thread </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a719b2cc067d92d52c35064a49d850a53"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename F , typename A &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">F&#160;</td>
          <td class="paramname"><em>function</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">A&#160;</td>
          <td class="paramname"><em>argument</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a functor with an argument. </p>
<p>This constructor works for function objects, as well as free functions. It is a template, which means that the argument can have any type (int, std::string, void*, Toto, ...).</p>
<p>Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>(<span class="keywordtype">int</span> arg);</div>
<div class="line"></div>
<div class="line"><span class="comment">// --- or ----</span></div>
<div class="line"></div>
<div class="line"><span class="keyword">struct </span>Functor</div>
<div class="line">{</div>
<div class="line">    <span class="keywordtype">void</span> operator()(std::string arg);</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Functor or free function to use as the entry point of the thread </td></tr>
    <tr><td class="paramname">argument</td><td>argument to forward to the function </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aa9f473c8cbb078900c62b1fd14a83a34"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename C &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::Thread </td>
          <td>(</td>
          <td class="paramtype">void(C::*)()&#160;</td>
          <td class="paramname"><em>function</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">C *&#160;</td>
          <td class="paramname"><em>object</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the thread from a member function and an object. </p>
<p>This constructor is a template, which means that you can use it with any class. Use this constructor for this kind of function: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MyClass</div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span>:</div>
<div class="line"></div>
<div class="line">    <span class="keywordtype">void</span> <span class="keyword">function</span>();</div>
<div class="line">};</div>
</div><!-- fragment --><p> Note: this does <em>not</em> run the thread, use <a class="el" href="classsf_1_1Thread.php#a74f75a9e86e1eb47479496314048b5f6" title="Run the thread. ">launch()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">function</td><td>Entry point of the thread </td></tr>
    <tr><td class="paramname">object</td><td>Pointer to the object to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="af77942fc1730af7c31bc4c3a913a9c1d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Thread::~Thread </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>This destructor calls <a class="el" href="classsf_1_1Thread.php#a724b1f94c2d54f84280f2f78bde95fa0" title="Wait until the thread finishes. ">wait()</a>, so that the internal thread cannot survive after its <a class="el" href="classsf_1_1Thread.php" title="Utility class to manipulate threads. ">sf::Thread</a> instance is destroyed. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a74f75a9e86e1eb47479496314048b5f6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::launch </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Run the thread. </p>
<p>This function starts the entry point passed to the thread's constructor, and returns immediately. After this function returns, the thread's function is running in parallel to the calling code. </p>

</div>
</div>
<a class="anchor" id="a74f75a9e86e1eb47479496314048b5f6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::launch </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Run the thread. </p>
<p>This function starts the entry point passed to the thread's constructor, and returns immediately. After this function returns, the thread's function is running in parallel to the calling code. </p>

</div>
</div>
<a class="anchor" id="ad6b205d4f1ce38b8d44bba0f5501477c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::terminate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Terminate the thread. </p>
<p>This function immediately stops the thread, without waiting for its function to finish. Terminating a thread with this function is not safe, and can lead to local variables not being destroyed on some operating systems. You should rather try to make the thread function terminate by itself. </p>

</div>
</div>
<a class="anchor" id="ad6b205d4f1ce38b8d44bba0f5501477c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::terminate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Terminate the thread. </p>
<p>This function immediately stops the thread, without waiting for its function to finish. Terminating a thread with this function is not safe, and can lead to local variables not being destroyed on some operating systems. You should rather try to make the thread function terminate by itself. </p>

</div>
</div>
<a class="anchor" id="a724b1f94c2d54f84280f2f78bde95fa0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::wait </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wait until the thread finishes. </p>
<p>This function will block the execution until the thread's function ends. Warning: if the thread function never ends, the calling thread will block forever. If this function is called from its owner thread, it returns without doing anything. </p>

</div>
</div>
<a class="anchor" id="a724b1f94c2d54f84280f2f78bde95fa0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Thread::wait </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wait until the thread finishes. </p>
<p>This function will block the execution until the thread's function ends. Warning: if the thread function never ends, the calling thread will block forever. If this function is called from its owner thread, it returns without doing anything. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="include_2SFML_2System_2Thread_8hpp_source.php">include/SFML/System/Thread.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>