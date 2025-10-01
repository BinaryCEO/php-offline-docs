<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: CommonMark\Node\HTMLBlock - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/class.commonmark-node-htmlblock.php">
 <link rel="shorturl" href="https://www.php.net/commonmark-node-htmlblock">
 <link rel="alternate" href="https://www.php.net/commonmark-node-htmlblock" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.cmark.php">
 <link rel="prev" href="https://www.php.net/manual/en/commonmark-node-codeblock.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/class.commonmark-node-htmlinline.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.commonmark-node-htmlblock.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.commonmark-node-htmlblock.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.commonmark-node-htmlblock.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.commonmark-node-htmlblock.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.commonmark-node-htmlblock.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.commonmark-node-htmlblock.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.commonmark-node-htmlblock.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.commonmark-node-htmlblock.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.commonmark-node-htmlblock.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.commonmark-node-htmlblock.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.commonmark-node-htmlblock.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="HTMLBlock concrete CommonMark\Node" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: CommonMark\Node\HTMLBlock - Manual" />
<meta name="twitter:description" content="HTMLBlock concrete CommonMark\Node" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: CommonMark\Node\HTMLBlock - Manual" />
<meta itemprop="description" content="HTMLBlock concrete CommonMark\Node" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="HTMLBlock concrete CommonMark\Node" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="class.commonmark-node-htmlinline.php">
          CommonMark\Node\HTMLInline &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="commonmark-node-codeblock.construct.php">
          &laquo; CommonMark\Node\CodeBlock::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.cmark.php'>CommonMark</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/class.commonmark-node-htmlblock.php' selected="selected">English</option>
            <option value='de/class.commonmark-node-htmlblock.php'>German</option>
            <option value='es/class.commonmark-node-htmlblock.php'>Spanish</option>
            <option value='fr/class.commonmark-node-htmlblock.php'>French</option>
            <option value='it/class.commonmark-node-htmlblock.php'>Italian</option>
            <option value='ja/class.commonmark-node-htmlblock.php'>Japanese</option>
            <option value='pt_BR/class.commonmark-node-htmlblock.php'>Brazilian Portuguese</option>
            <option value='ru/class.commonmark-node-htmlblock.php'>Russian</option>
            <option value='tr/class.commonmark-node-htmlblock.php'>Turkish</option>
            <option value='uk/class.commonmark-node-htmlblock.php'>Ukrainian</option>
            <option value='zh/class.commonmark-node-htmlblock.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.commonmark-node-htmlblock" class="reference">

 <h1 class="title">HTMLBlock concrete CommonMark\Node</h1>
 

 <div class="partintro"><p class="verinfo">(cmark &gt;= 1.0.0)</p>

  <div class="section" id="commonmark-node-htmlblock.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">CommonMark\Node\HTMLBlock</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.commonmark-node-text.php" class="classname">CommonMark\Node\Text</a>
     </span>

     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.commonmark-interfaces-ivisitable.php" class="interfacename">CommonMark\Interfaces\IVisitable</a></span><span class="oointerface">,  <a href="class.traversable.php" class="interfacename">Traversable</a></span> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type">Node</span><span class="type"></span></span>
      <var class="varname">$<var class="varname">parent</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type">Node</span><span class="type"></span></span>
      <var class="varname">$<var class="varname">previous</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type">Node</span><span class="type"></span></span>
      <var class="varname">$<var class="varname">next</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type">Node</span><span class="type"></span></span>
      <var class="varname">$<var class="varname">lastChild</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type">Node</span><span class="type"></span></span>
      <var class="varname">$<var class="varname">firstChild</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname">$<var class="varname">startLine</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname">$<var class="varname">endLine</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname">$<var class="varname">startColumn</var></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname">$<var class="varname">endColumn</var></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname">$<var class="varname">literal</var></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constructor */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="commonmark-node-text.construct.php" class="methodname">CommonMark\Node\Text::__construct</a></span>()</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node-text.construct.php" class="methodname">CommonMark\Node\Text::__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$literal</code></span>)</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.appendchild.php" class="methodname">CommonMark\Node::appendChild</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span> <code class="parameter">$child</code></span>): <span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.prependchild.php" class="methodname">CommonMark\Node::prependChild</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span> <code class="parameter">$child</code></span>): <span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.insertafter.php" class="methodname">CommonMark\Node::insertAfter</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span> <code class="parameter">$sibling</code></span>): <span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.insertbefore.php" class="methodname">CommonMark\Node::insertBefore</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span> <code class="parameter">$sibling</code></span>): <span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.replace.php" class="methodname">CommonMark\Node::replace</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span> <code class="parameter">$target</code></span>): <span class="type"><a href="class.commonmark-node.php" class="type CommonMark\Node">CommonMark\Node</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.unlink.php" class="methodname">CommonMark\Node::unlink</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="commonmark-node.accept.php" class="methodname">CommonMark\Node::accept</a></span>(<span class="methodparam"><span class="type"><a href="class.commonmark-interfaces-ivisitor.php" class="type CommonMark\Interfaces\IVisitor">CommonMark\Interfaces\IVisitor</a></span> <code class="parameter">$visitor</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


   }</div>


  </div>

 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/cmark/commonmark.node.htmlblock.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.commonmark-node-htmlblock%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.commonmark-node-htmlblock&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.commonmark-node-htmlblock.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.cmark.php">CommonMark</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.cmark.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="cmark.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="cmark.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-document.php" title="CommonMark\Node\Document">CommonMark\Node\Document</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-heading.php" title="CommonMark\Node\Heading">CommonMark\Node\Heading</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-paragraph.php" title="CommonMark\Node\Paragraph">CommonMark\Node\Paragraph</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-blockquote.php" title="CommonMark\Node\BlockQuote">CommonMark\Node\BlockQuote</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-bulletlist.php" title="CommonMark\Node\BulletList">CommonMark\Node\BulletList</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-orderedlist.php" title="CommonMark\Node\OrderedList">CommonMark\Node\OrderedList</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-item.php" title="CommonMark\Node\Item">CommonMark\Node\Item</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-text.php" title="CommonMark\Node\Text">CommonMark\Node\Text</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-text-strong.php" title="CommonMark\Node\Text\Strong">CommonMark\Node\Text\Strong</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-text-emphasis.php" title="CommonMark\Node\Text\Emphasis">CommonMark\Node\Text\Emphasis</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-thematicbreak.php" title="CommonMark\Node\ThematicBreak">CommonMark\Node\ThematicBreak</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-softbreak.php" title="CommonMark\Node\SoftBreak">CommonMark\Node\SoftBreak</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-linebreak.php" title="CommonMark\Node\LineBreak">CommonMark\Node\LineBreak</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-code.php" title="CommonMark\Node\Code">CommonMark\Node\Code</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-codeblock.php" title="CommonMark\Node\CodeBlock">CommonMark\Node\CodeBlock</a>
                        </li>
                                                <li class="current">
                            <a href="class.commonmark-node-htmlblock.php" title="CommonMark\Node\HTMLBlock">CommonMark\Node\HTMLBlock</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-htmlinline.php" title="CommonMark\Node\HTMLInline">CommonMark\Node\HTMLInline</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-image.php" title="CommonMark\Node\Image">CommonMark\Node\Image</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-link.php" title="CommonMark\Node\Link">CommonMark\Node\Link</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-customblock.php" title="CommonMark\Node\CustomBlock">CommonMark\Node\CustomBlock</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node-custominline.php" title="CommonMark\Node\CustomInline">CommonMark\Node\CustomInline</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-node.php" title="CommonMark\Node">CommonMark\Node</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-interfaces-ivisitor.php" title="CommonMark\Interfaces\IVisitor">CommonMark\Interfaces\IVisitor</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-interfaces-ivisitable.php" title="CommonMark\Interfaces\IVisitable">CommonMark\Interfaces\IVisitable</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-parser.php" title="CommonMark\Parser">CommonMark\Parser</a>
                        </li>
                                                <li class="">
                            <a href="class.commonmark-cql.php" title="CommonMark\CQL">CommonMark\CQL</a>
                        </li>
                                                <li class="">
                            <a href="ref.cmark.php" title="CommonMark Functions">CommonMark Functions</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
