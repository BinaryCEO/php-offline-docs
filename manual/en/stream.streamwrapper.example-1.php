<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Example class registered as stream wrapper - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/stream.streamwrapper.example-1.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/stream.streamwrapper.example-1.php">
 <link rel="alternate" href="https://www.php.net/manual/en/stream.streamwrapper.example-1.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/stream.examples.php">
 <link rel="prev" href="https://www.php.net/manual/en/stream.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/class.php-user-filter.php">

 <link rel="alternate" href="https://www.php.net/manual/en/stream.streamwrapper.example-1.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/stream.streamwrapper.example-1.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/stream.streamwrapper.example-1.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/stream.streamwrapper.example-1.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/stream.streamwrapper.example-1.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/stream.streamwrapper.example-1.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/stream.streamwrapper.example-1.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/stream.streamwrapper.example-1.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/stream.streamwrapper.example-1.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/stream.streamwrapper.example-1.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/stream.streamwrapper.example-1.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Example class registered as stream wrapper" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Example class registered as stream wrapper - Manual" />
<meta name="twitter:description" content="Example class registered as stream wrapper" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Example class registered as stream wrapper - Manual" />
<meta itemprop="description" content="Example class registered as stream wrapper" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Example class registered as stream wrapper" />

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
        <a href="class.php-user-filter.php">
          php_user_filter &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="stream.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      <li><a href='stream.examples.php'>Examples</a></li>      </ul>
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
            <option value='en/stream.streamwrapper.example-1.php' selected="selected">English</option>
            <option value='de/stream.streamwrapper.example-1.php'>German</option>
            <option value='es/stream.streamwrapper.example-1.php'>Spanish</option>
            <option value='fr/stream.streamwrapper.example-1.php'>French</option>
            <option value='it/stream.streamwrapper.example-1.php'>Italian</option>
            <option value='ja/stream.streamwrapper.example-1.php'>Japanese</option>
            <option value='pt_BR/stream.streamwrapper.example-1.php'>Brazilian Portuguese</option>
            <option value='ru/stream.streamwrapper.example-1.php'>Russian</option>
            <option value='tr/stream.streamwrapper.example-1.php'>Turkish</option>
            <option value='uk/stream.streamwrapper.example-1.php'>Ukrainian</option>
            <option value='zh/stream.streamwrapper.example-1.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="stream.streamwrapper.example-1" class="section">
  <h2 class="title">Example class registered as stream wrapper</h2>
  <p class="para">
   The example below implements a var:// protocol handler that allows
   read/write access to a named global variable using standard filesystem
   stream functions such as <span class="function"><a href="function.fread.php" class="function">fread()</a></span>. The var:// protocol
   implemented below, given the URL &quot;var://foo&quot; will read/write data
   to/from $GLOBALS[&quot;foo&quot;].
  </p>
  <p class="para">
   <div class="example" id="example-4041">
    <p><strong>Example #1 A Stream for reading/writing global variables</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">VariableStream </span><span style="color: #007700">{<br />    var </span><span style="color: #0000BB">$position</span><span style="color: #007700">;<br />    var </span><span style="color: #0000BB">$varname</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">stream_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">, </span><span style="color: #0000BB">$mode</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$opened_path</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$url </span><span style="color: #007700">= </span><span style="color: #0000BB">parse_url</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname </span><span style="color: #007700">= </span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">];<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">], </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">, </span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">+= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$left </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">], </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$right </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">], </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">+ </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />        </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">] = </span><span style="color: #0000BB">$left </span><span style="color: #007700">. </span><span style="color: #0000BB">$data </span><span style="color: #007700">. </span><span style="color: #0000BB">$right</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">+= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_tell</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position</span><span style="color: #007700">;<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_eof</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">]);<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_seek</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">, </span><span style="color: #0000BB">$whence</span><span style="color: #007700">)<br />    {<br />        switch (</span><span style="color: #0000BB">$whence</span><span style="color: #007700">) {<br />            case </span><span style="color: #0000BB">SEEK_SET</span><span style="color: #007700">:<br />                if (</span><span style="color: #0000BB">$offset </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">]) &amp;&amp; </span><span style="color: #0000BB">$offset </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />                     </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">= </span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />                     return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />                } else {<br />                     return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />                }<br />                break;<br /><br />            case </span><span style="color: #0000BB">SEEK_CUR</span><span style="color: #007700">:<br />                if (</span><span style="color: #0000BB">$offset </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />                     </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">+= </span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />                     return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />                } else {<br />                     return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />                }<br />                break;<br /><br />            case </span><span style="color: #0000BB">SEEK_END</span><span style="color: #007700">:<br />                if (</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">]) + </span><span style="color: #0000BB">$offset </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />                     </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">varname</span><span style="color: #007700">]) + </span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />                     return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />                } else {<br />                     return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />                }<br />                break;<br /><br />            default:<br />                return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />        }<br />    }<br /><br />    function </span><span style="color: #0000BB">stream_metadata</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">, </span><span style="color: #0000BB">$option</span><span style="color: #007700">, </span><span style="color: #0000BB">$var</span><span style="color: #007700">) <br />    {<br />        if(</span><span style="color: #0000BB">$option </span><span style="color: #007700">== </span><span style="color: #0000BB">STREAM_META_TOUCH</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$url </span><span style="color: #007700">= </span><span style="color: #0000BB">parse_url</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$varname </span><span style="color: #007700">= </span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">];<br />            if(!isset(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$varname</span><span style="color: #007700">])) {<br />                </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #0000BB">$varname</span><span style="color: #007700">] = </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />            }<br />            return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />        }<br />        return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">stream_wrapper_register</span><span style="color: #007700">(</span><span style="color: #DD0000">"var"</span><span style="color: #007700">, </span><span style="color: #DD0000">"VariableStream"</span><span style="color: #007700">)<br />    or die(</span><span style="color: #DD0000">"Failed to register protocol"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$myvar </span><span style="color: #007700">= </span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"var://myvar"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r+"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">"line1\n"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">"line2\n"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">"line3\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">rewind</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$myvar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
line1
line2
line3
string(18) &quot;line1
line2
line3
&quot;
</pre></div>
    </div>
   </div>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fstream.streamwrapper.example-1%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=stream.streamwrapper.example-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/stream.streamwrapper.example-1.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99283">  <div class="votes">
    <div id="Vu99283">
    <a href="/manual/vote-note.php?id=99283&amp;page=stream.streamwrapper.example-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99283">
    <a href="/manual/vote-note.php?id=99283&amp;page=stream.streamwrapper.example-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99283" title="76% like this...">
    22
    </div>
  </div>
  <a href="#99283" class="name">
  <strong class="user"><em>pfe dot skh at gmail dot com</em></strong></a><a class="genanchor" href="#99283"> &para;</a><div class="date" title="2010-08-08 09:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99283">
<div class="phpcode"><code><span class="html">Example of stream used with databases :<br /><br />Requirement :<br />A MySQL database with a table named data structured as follow :<br />CREATE TABLE IF NOT EXISTS `data` (<br />  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,<br />  `data` varchar(255) NOT NULL,<br />  `when_inserted` datetime NOT NULL,<br />  PRIMARY KEY (`id`)<br />) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;<br /><br />Now with the stream implementation :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">DBStream </span><span class="keyword">{<br />    private </span><span class="default">$_pdo</span><span class="keyword">;<br />    private </span><span class="default">$_ps</span><span class="keyword">;<br />    private </span><span class="default">$_rowId </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, &amp;</span><span class="default">$opath</span><span class="keyword">)<br />    {<br />        </span><span class="default">$url </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />        </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">], </span><span class="default">1</span><span class="keyword">);<br />        try{<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pdo </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">"mysql:host=</span><span class="keyword">{</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]}</span><span class="string">;dbname=</span><span class="keyword">{</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">], isset(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">])? </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">, array());<br />        } catch(</span><span class="default">PDOException $e</span><span class="keyword">){ return </span><span class="default">false</span><span class="keyword">; }<br />        switch (</span><span class="default">$mode</span><span class="keyword">){<br />            case </span><span class="string">'w' </span><span class="keyword">: <br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT INTO data VALUES(null, ?, NOW())'</span><span class="keyword">);<br />                break;<br />            case </span><span class="string">'r' </span><span class="keyword">: <br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT id, data FROM data WHERE id &gt; ? LIMIT 1'</span><span class="keyword">);<br />                break;<br />            default  : return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">stream_read</span><span class="keyword">()<br />    {<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rowId</span><span class="keyword">));<br />         if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">bindcolumn</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rowId</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">bindcolumn</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br />         return </span><span class="default">$ret</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">stream_write</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="default">$data</span><span class="keyword">));<br />        return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">stream_tell</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rowId</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">stream_eof</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rowId</span><span class="keyword">));<br />        return (bool) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ps</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">();<br />    }<br /><br />    function </span><span class="default">stream_seek</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$step</span><span class="keyword">)<br />    {<br />        </span><span class="comment">//No need to be implemented<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">stream_register_wrapper</span><span class="keyword">(</span><span class="string">'db'</span><span class="keyword">, </span><span class="string">'DBStream'</span><span class="keyword">);<br /><br /></span><span class="default">$fr </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'db://testuser@localhost/testdb'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /></span><span class="default">$fw </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'db://testuser:testpassword@localhost/testdb'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /></span><span class="comment">//The two forms above are accepted : for the former, the default password "" will be used<br /><br /></span><span class="default">$alg </span><span class="keyword">= </span><span class="default">hash_algos</span><span class="keyword">();<br /></span><span class="default">$al </span><span class="keyword">= </span><span class="default">$alg</span><span class="keyword">[</span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$alg</span><span class="keyword">)];<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$al</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">999</span><span class="keyword">))); </span><span class="comment">// Some random data to be written<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fw</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); </span><span class="comment">// Writing the data to the wrapper<br /></span><span class="keyword">while(</span><span class="default">$a </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fr</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">)){ </span><span class="comment">//A loop for reading from the wrapper<br />    </span><span class="keyword">echo </span><span class="default">$a </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope it helps, cheers ;)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=stream.streamwrapper.example-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/stream.streamwrapper.example-1.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="stream.examples.php">Examples</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="stream.streamwrapper.example-1.php" title="Example class registered as stream wrapper">Example class registered as stream wrapper</a>
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
