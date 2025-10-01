<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_included_files - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-included-files.php">
 <link rel="shorturl" href="https://www.php.net/get-included-files">
 <link rel="alternate" href="https://www.php.net/get-included-files" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.get-include-path.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-loaded-extensions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-included-files.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-included-files.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-included-files.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-included-files.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-included-files.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-included-files.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-included-files.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-included-files.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-included-files.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-included-files.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-included-files.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns an array with the names of included or required files" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_included_files - Manual" />
<meta name="twitter:description" content="Returns an array with the names of included or required files" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_included_files - Manual" />
<meta itemprop="description" content="Returns an array with the names of included or required files" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns an array with the names of included or required files" />

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
        <a href="function.get-loaded-extensions.php">
          get_loaded_extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.get-include-path.php">
          &laquo; get_include_path        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.get-included-files.php' selected="selected">English</option>
            <option value='de/function.get-included-files.php'>German</option>
            <option value='es/function.get-included-files.php'>Spanish</option>
            <option value='fr/function.get-included-files.php'>French</option>
            <option value='it/function.get-included-files.php'>Italian</option>
            <option value='ja/function.get-included-files.php'>Japanese</option>
            <option value='pt_BR/function.get-included-files.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-included-files.php'>Russian</option>
            <option value='tr/function.get-included-files.php'>Turkish</option>
            <option value='uk/function.get-included-files.php'>Ukrainian</option>
            <option value='zh/function.get-included-files.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-included-files" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_included_files</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_included_files</span> &mdash; <span class="dc-title">Returns an array with the names of included or required files</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.get-included-files-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_included_files</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets the names of all files that have been included using
   <span class="function"><a href="function.include.php" class="function">include</a></span>, <span class="function"><a href="function.include-once.php" class="function">include_once</a></span>,
   <span class="function"><a href="function.require.php" class="function">require</a></span> or <span class="function"><a href="function.require-once.php" class="function">require_once</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.get-included-files-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.get-included-files-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of the names of all files.
  </p>
  <p class="para">
   The script originally called is considered an &quot;included file,&quot; so it will
   be listed together with the files referenced by 
   <span class="function"><a href="function.include.php" class="function">include</a></span> and family.
  </p>
  <p class="para">
   Files that are included or required multiple times only show up once in
   the returned array.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.get-included-files-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-645">
    <p><strong>Example #1 <span class="function"><strong>get_included_files()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This file is abc.php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'test1.php'</span><span style="color: #007700">;<br />include_once </span><span style="color: #DD0000">'test2.php'</span><span style="color: #007700">;<br />require </span><span style="color: #DD0000">'test3.php'</span><span style="color: #007700">;<br />require_once </span><span style="color: #DD0000">'test4.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$included_files </span><span style="color: #007700">= </span><span style="color: #0000BB">get_included_files</span><span style="color: #007700">();<br /><br />foreach (</span><span style="color: #0000BB">$included_files </span><span style="color: #007700">as </span><span style="color: #0000BB">$filename</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$filename</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">/path/to/abc.php
/path/to/test1.php
/path/to/test2.php
/path/to/test3.php
/path/to/test4.php</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.get-included-files-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.include.php" class="function" rel="rdfs-seeAlso">include</a> - include</span></li>
    <li><span class="function"><a href="function.include-once.php" class="function" rel="rdfs-seeAlso">include_once</a> - include_once</span></li>
    <li><span class="function"><a href="function.require.php" class="function" rel="rdfs-seeAlso">require</a> - require</span></li>
    <li><span class="function"><a href="function.require-once.php" class="function" rel="rdfs-seeAlso">require_once</a> - require_once</span></li>
    <li><span class="function"><a href="function.get-required-files.php" class="function" rel="rdfs-seeAlso">get_required_files()</a> - Alias of get_included_files</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/get-included-files.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-included-files%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-included-files&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-included-files.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="45451">  <div class="votes">
    <div id="Vu45451">
    <a href="/manual/vote-note.php?id=45451&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45451">
    <a href="/manual/vote-note.php?id=45451&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45451" title="82% like this...">
    23
    </div>
  </div>
  <a href="#45451" class="name">
  <strong class="user"><em>keystorm :at: gmail dotcom</em></strong></a><a class="genanchor" href="#45451"> &para;</a><div class="date" title="2004-09-07 02:08"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45451">
<div class="phpcode"><code><span class="html">As of PHP5, this function seems to return an array with the first index being the script all subsequent scripts are included to.<br />If index.php includes b.php and c.php and calls get_included_files(), the returned array looks as follows:<br /><br />index.php<br />a.php<br />b.php<br /><br />while in PHP&lt;5 the array would be:<br /><br />a.php<br />b.php<br /><br />If you want to know which is the script that is including current script you can use $_SERVER['SCRIPT_FILENAME'] or any other similar server global.<br /><br />If you also want to ensure current script is being included and not run independently you should evaluate following expression:<br /><br />__FILE__ != $_SERVER['SCRIPT_FILENAME']<br /><br />If this expression returns TRUE, current script is being included or required.</span></code></div>
  </div>
 </div>
  <div class="note" id="76183">  <div class="votes">
    <div id="Vu76183">
    <a href="/manual/vote-note.php?id=76183&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76183">
    <a href="/manual/vote-note.php?id=76183&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76183" title="79% like this...">
    14
    </div>
  </div>
  <a href="#76183" class="name">
  <strong class="user"><em>yarco dot w at gmail dot com</em></strong></a><a class="genanchor" href="#76183"> &para;</a><div class="date" title="2007-07-03 08:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76183">
<div class="phpcode"><code><span class="html">If you have a MAIN php script which you don't want to be included by other scripts, you could use this function. For example:<br /><br />main.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">blockit</span><span class="keyword">()<br />{<br />  </span><span class="default">$buf </span><span class="keyword">= </span><span class="default">get_included_files</span><span class="keyword">();<br />  return </span><span class="default">$buf</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="default">__FILE__</span><span class="keyword">;<br />}<br /><br /></span><span class="default">blockit</span><span class="keyword">() and exit(</span><span class="string">"You can not include a MAIN file as a part of your script."</span><span class="keyword">);<br /><br />print </span><span class="string">"OK"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />So other script couldn't include main.php to modify its internal global vars.</span></code></div>
  </div>
 </div>
  <div class="note" id="124569">  <div class="votes">
    <div id="Vu124569">
    <a href="/manual/vote-note.php?id=124569&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124569">
    <a href="/manual/vote-note.php?id=124569&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124569" title="66% like this...">
    6
    </div>
  </div>
  <a href="#124569" class="name">
  <strong class="user"><em>D</em></strong></a><a class="genanchor" href="#124569"> &para;</a><div class="date" title="2020-01-06 12:15"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124569">
<div class="phpcode"><code><span class="html">It's perhaps not clear from the existing docs that the returned list contains nested include files as well.<br /><br />That is, if A.php includes B.php, and B.php includes C.php, the result returned when calling get_included_files() from inside A.php WILL contain 'C.php'.</span></code></div>
  </div>
 </div>
  <div class="note" id="105571">  <div class="votes">
    <div id="Vu105571">
    <a href="/manual/vote-note.php?id=105571&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105571">
    <a href="/manual/vote-note.php?id=105571&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105571" title="60% like this...">
    5
    </div>
  </div>
  <a href="#105571" class="name">
  <strong class="user"><em>donikuntoro at integraasp dot com</em></strong></a><a class="genanchor" href="#105571"> &para;</a><div class="date" title="2011-08-29 03:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105571">
<div class="phpcode"><code><span class="html">This function aims to perform filtering of files that have been included :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">setIncludeFiles</span><span class="keyword">(</span><span class="default">$arrayInc </span><span class="keyword">= array()){
<br />    </span><span class="default">$incFiles </span><span class="keyword">= </span><span class="default">get_included_files</span><span class="keyword">();
<br />    if((</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arrayInc</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)&amp;&amp;(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$incFiles</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)){
<br />        </span><span class="default">$aInt </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$arrayInc</span><span class="keyword">,</span><span class="default">$incFiles</span><span class="keyword">);
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aInt</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">){
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />       }elseif(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aInt</span><span class="keyword">)&lt;</span><span class="default">1</span><span class="keyword">) {
<br />        foreach(</span><span class="default">$arrayInc </span><span class="keyword">as </span><span class="default">$inc</span><span class="keyword">){
<br />            if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$inc</span><span class="keyword">))
<br />                include(</span><span class="default">$inc</span><span class="keyword">);
<br />            else{
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />            }
<br />        }
<br />       }    
<br />    }else{
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Usage :
<br />
<br /><span class="default">&lt;?php
<br />$toBeInclude </span><span class="keyword">= array(</span><span class="string">'/data/your_include_files_1.php'</span><span class="keyword">,
<br /></span><span class="string">'/data/your_include_files_2.php'</span><span class="keyword">,
<br /></span><span class="string">'/data/your_include_files_3.php'</span><span class="keyword">,
<br />);
<br /></span><span class="default">setIncludeFiles</span><span class="keyword">(</span><span class="default">$toBeInclude</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Return false if something goes wrong.</span></code></div>
  </div>
 </div>
  <div class="note" id="62741">  <div class="votes">
    <div id="Vu62741">
    <a href="/manual/vote-note.php?id=62741&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62741">
    <a href="/manual/vote-note.php?id=62741&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62741" title="57% like this...">
    3
    </div>
  </div>
  <a href="#62741" class="name">
  <strong class="user"><em>RPaseur at NationalPres dot org</em></strong></a><a class="genanchor" href="#62741"> &para;</a><div class="date" title="2006-03-08 08:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62741">
<div class="phpcode"><code><span class="html">As is often the case, YMMV.  I tried the __FILE__ and SCRIPT_FILENAME comparison and found this:<br /><br />SCRIPT_FILENAME: /var/www/cgi-bin/php441<br />__FILE__: /raid/home/natpresch/natpresch/RAY_included.php<br /><br />As an alternative:<br /><br />count(get_included_files()); <br /><br />Gives one when the script is standalone and always more than one when the script is included.</span></code></div>
  </div>
 </div>
  <div class="note" id="130490">  <div class="votes">
    <div id="Vu130490">
    <a href="/manual/vote-note.php?id=130490&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130490">
    <a href="/manual/vote-note.php?id=130490&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130490" title="no votes...">
    0
    </div>
  </div>
  <a href="#130490" class="name">
  <strong class="user"><em>miqrogroove at gmail dot com</em></strong></a><a class="genanchor" href="#130490"> &para;</a><div class="date" title="2025-09-23 10:26"><strong>6 days ago</strong></div>
  <div class="text" id="Hcom130490">
<div class="phpcode"><code><span class="html">Correction to the top comment:<br /><br />The modern behavior of this function was not introduced in PHP 5.  The change can be seen when testing versions less than 4.3.0.<br /><br />So, backwards compatibility with v4.2.3 and earlier requires a version check.</span></code></div>
  </div>
 </div>
  <div class="note" id="126841">  <div class="votes">
    <div id="Vu126841">
    <a href="/manual/vote-note.php?id=126841&amp;page=function.get-included-files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126841">
    <a href="/manual/vote-note.php?id=126841&amp;page=function.get-included-files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126841" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126841" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#126841"> &para;</a><div class="date" title="2022-02-11 04:23"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126841">
<div class="phpcode"><code><span class="html">This is a great way to emulate Python's '__name__ = "__main__"'<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">if(</span><span class="default">get_included_files</span><span class="keyword">()[</span><span class="default">0</span><span class="keyword">] === </span><span class="default">__FILE__</span><span class="keyword">) </span><span class="default">doStuff</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-included-files&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-included-files.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="current">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
