<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Large Objects (LOBs) - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.lobs.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.lobs.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.lobs.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.error-handling.php">
 <link rel="next" href="https://www.php.net/manual/en/class.pdo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.lobs.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.lobs.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.lobs.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.lobs.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.lobs.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.lobs.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.lobs.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.lobs.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.lobs.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.lobs.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.lobs.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Large Objects (LOBs)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Large Objects (LOBs) - Manual" />
<meta name="twitter:description" content="Large Objects (LOBs)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Large Objects (LOBs) - Manual" />
<meta itemprop="description" content="Large Objects (LOBs)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Large Objects (LOBs)" />

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
        <a href="class.pdo.php">
          PDO &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.error-handling.php">
          &laquo; Errors and error handling        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/pdo.lobs.php' selected="selected">English</option>
            <option value='de/pdo.lobs.php'>German</option>
            <option value='es/pdo.lobs.php'>Spanish</option>
            <option value='fr/pdo.lobs.php'>French</option>
            <option value='it/pdo.lobs.php'>Italian</option>
            <option value='ja/pdo.lobs.php'>Japanese</option>
            <option value='pt_BR/pdo.lobs.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.lobs.php'>Russian</option>
            <option value='tr/pdo.lobs.php'>Turkish</option>
            <option value='uk/pdo.lobs.php'>Ukrainian</option>
            <option value='zh/pdo.lobs.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.lobs" class="chapter">
 <h1 class="title">Large Objects (LOBs)</h1>

 <p class="para">
   At some point in your application, you might find that you need to store
   &quot;large&quot; data in your database. Large typically means &quot;around 4kb or
   more&quot;, although some databases can happily handle up to 32kb before data becomes
   &quot;large&quot;. Large objects can be either textual or binary in nature. PDO
   allows you to work with this large data type by using the
   <strong><code><a href="pdo.constants.php#pdo.constants.param-lob">PDO::PARAM_LOB</a></code></strong>
   type code in your <span class="methodname"><a href="pdostatement.bindparam.php" class="methodname">PDOStatement::bindParam()</a></span> or
   <span class="methodname"><a href="pdostatement.bindcolumn.php" class="methodname">PDOStatement::bindColumn()</a></span> calls.
   <strong><code><a href="pdo.constants.php#pdo.constants.param-lob">PDO::PARAM_LOB</a></code></strong> tells
   PDO to map the data as a stream, so that you can manipulate it using the
   <a href="ref.stream.php" class="link">PHP Streams API</a>.
 </p>
 <p class="para">
  <div class="example" id="example-1125">
   <p><strong>Example #1 Displaying an image from a database</strong></p>
   <div class="example-contents"><p>
    This example binds the LOB into the variable named $lob and then sends
    it to the browser using <span class="function"><a href="function.fpassthru.php" class="function">fpassthru()</a></span>.  Since the LOB
    is represented as a stream, functions such as
    <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>, <span class="function"><a href="function.fread.php" class="function">fread()</a></span> and
    <span class="function"><a href="function.stream-get-contents.php" class="function">stream_get_contents()</a></span> can be used on it.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$db </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #DD0000">'odbc:SAMPLE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"select contenttype, imagedata from images where id=?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$type</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">, </span><span style="color: #0000BB">256</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$lob</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_BOUND</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: </span><span style="color: #0000BB">$type</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$lob</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1126">
   <p><strong>Example #2 Inserting an image into a database</strong></p>
   <div class="example-contents"><p>
    This example opens up a file and passes the file handle to PDO to insert
    it as a LOB.  PDO will do its best to get the contents of the file up
    to the database in the most efficient manner possible.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$db </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #DD0000">'odbc:SAMPLE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"insert into images (id, contenttype, imagedata) values (?, ?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">get_new_id</span><span style="color: #007700">(); </span><span style="color: #FF8000">// some function to allocate a new ID<br /><br />// assume that we are running as part of a file upload form<br />// You can find more information in the PHP documentation<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">], </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">][</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commit</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1127">
   <p><strong>Example #3 Inserting an image into a database: Oracle</strong></p>
   <div class="example-contents"><p>
    Oracle requires a slightly different syntax for inserting a lob from a
    file.  It&#039;s also essential that you perform the insert under a
    transaction, otherwise your newly inserted LOB will be committed with a
    zero-length as part of the implicit commit that happens when the query
    is executed:
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$db </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #DD0000">'oci:'</span><span style="color: #007700">, </span><span style="color: #DD0000">'scott'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tiger'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"insert into images (id, contenttype, imagedata) " </span><span style="color: #007700">.<br /></span><span style="color: #DD0000">"VALUES (?, ?, EMPTY_BLOB()) RETURNING imagedata INTO ?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">get_new_id</span><span style="color: #007700">(); </span><span style="color: #FF8000">// some function to allocate a new ID<br /><br />// assume that we are running as part of a file upload form<br />// You can find more information in the PHP documentation<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">], </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">][</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commit</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/lobs.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.lobs%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.lobs&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.lobs.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93218">  <div class="votes">
    <div id="Vu93218">
    <a href="/manual/vote-note.php?id=93218&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93218">
    <a href="/manual/vote-note.php?id=93218&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93218" title="76% like this...">
    13
    </div>
  </div>
  <a href="#93218" class="name">
  <strong class="user"><em>http://matts.org/</em></strong></a><a class="genanchor" href="#93218"> &para;</a><div class="date" title="2009-08-28 01:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93218">
<div class="phpcode"><code><span class="html">A big gotcha exists for Oracle users.<br /><br />You have to save CLOB objects using PDO::PARAM_STR, not PDO::PARAM_LOB.<br /><br />But you MUST send the 4th argument, usually strlen($subject) or you get a LONG error.</span></code></div>
  </div>
 </div>
  <div class="note" id="90004">  <div class="votes">
    <div id="Vu90004">
    <a href="/manual/vote-note.php?id=90004&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90004">
    <a href="/manual/vote-note.php?id=90004&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90004" title="72% like this...">
    10
    </div>
  </div>
  <a href="#90004" class="name">
  <strong class="user"><em>diogoko at gmail dot com</em></strong></a><a class="genanchor" href="#90004"> &para;</a><div class="date" title="2009-04-01 09:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90004">
<div class="phpcode"><code><span class="html">PDOStatement's methods bindParam and bindValue also work with strings, as in:
<br />
<br /><span class="default">&lt;?php
<br />  $data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">);
<br />  </span><span class="comment">//...
<br /></span><span class="default">?&gt;
<br /></span>
<br />This was the only way I could make it work with PostgreSQL.</span></code></div>
  </div>
 </div>
  <div class="note" id="96311">  <div class="votes">
    <div id="Vu96311">
    <a href="/manual/vote-note.php?id=96311&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96311">
    <a href="/manual/vote-note.php?id=96311&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96311" title="68% like this...">
    11
    </div>
  </div>
  <a href="#96311" class="name">
  <strong class="user"><em>Jeremy Cook</em></strong></a><a class="genanchor" href="#96311"> &para;</a><div class="date" title="2010-02-19 01:31"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96311">
<div class="phpcode"><code><span class="html">There seems to be a bug that affects example 1 above. PDO::PARAM_LOB when used with pdo::bindColumn() is supposed to return a stream but it returns a string. Passing this string to fpassthru() then triggers an error with the message 'supplied argument is not a valid stream resource'. This has been reported in bug #40913. The work around is to do the following:
<br />
<br /><span class="default">&lt;?php
<br />$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"select contenttype, imagedata from images where id=?"</span><span class="keyword">);
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]));
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">);
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$lob</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">);
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_BOUND</span><span class="keyword">);
<br />
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: </span><span class="default">$type</span><span class="string">"</span><span class="keyword">);
<br />echo(</span><span class="default">$lob</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Since the browser is expecting an image after the call to header() writing the string representation of the binary output with echo() has the same affect as calling fpassthru().</span></code></div>
  </div>
 </div>
  <div class="note" id="85897">  <div class="votes">
    <div id="Vu85897">
    <a href="/manual/vote-note.php?id=85897&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85897">
    <a href="/manual/vote-note.php?id=85897&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85897" title="66% like this...">
    5
    </div>
  </div>
  <a href="#85897" class="name">
  <strong class="user"><em>knl at bitflop dot com</em></strong></a><a class="genanchor" href="#85897"> &para;</a><div class="date" title="2008-09-23 12:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85897">
<div class="phpcode"><code><span class="html">I spend a lot of time trying to get this to work, but no matter what I did PDO corrupted my data.<br /><br />I finally discovered that I had been using:<br /><br />$pdo-&gt;exec('SET CHARACTER SET utf8');<br /><br />in the TRY part of my connection script.<br /><br />This off course doesn't work when you feed binary input to PDO using the parameter lob.</span></code></div>
  </div>
 </div>
  <div class="note" id="119464">  <div class="votes">
    <div id="Vu119464">
    <a href="/manual/vote-note.php?id=119464&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119464">
    <a href="/manual/vote-note.php?id=119464&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119464" title="58% like this...">
    2
    </div>
  </div>
  <a href="#119464" class="name">
  <strong class="user"><em>ben dot leiting at gmail dot com</em></strong></a><a class="genanchor" href="#119464"> &para;</a><div class="date" title="2016-06-13 05:56"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119464">
<div class="phpcode"><code><span class="html">For selecting data out of Postgres, the data type of the column in the table determined if the parameter bound with PARAM_LOB returned a string or returned a resource.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// create table log ( data text ) ;<br /></span><span class="default">$geth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'select data from log '</span><span class="keyword">);<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$dataString</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">);<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_BOUND</span><span class="keyword">);<br /><br />echo (</span><span class="default">$dataString</span><span class="keyword">); </span><span class="comment">// $dataString is a string<br /><br />// create table log ( data bytea ) ;<br /></span><span class="default">$geth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'select data from log'</span><span class="keyword">);<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$dataFH</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">);<br /></span><span class="default">$geth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_BOUND</span><span class="keyword">);<br /><br /></span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$dataFH</span><span class="keyword">); </span><span class="comment">// $dataFH is a resource</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123285">  <div class="votes">
    <div id="Vu123285">
    <a href="/manual/vote-note.php?id=123285&amp;page=pdo.lobs&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123285">
    <a href="/manual/vote-note.php?id=123285&amp;page=pdo.lobs&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123285" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#123285" class="name">
  <strong class="user"><em>phpcoder at gmail dot com</em></strong></a><a class="genanchor" href="#123285"> &para;</a><div class="date" title="2018-10-31 11:34"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123285">
<div class="phpcode"><code><span class="html">The DBMSs that are listed above have these (default) limits on the maximum size of a char string. The maximum is given in bytes so the number of characters storable can be smaller if a multibyte encoding is used.<br /><br />CUBRID:    16kB<br />SQL Server: 2GB<br />Firebird:  32kB<br />IBM Db2:   32kB<br />Informix:  32kB<br />MySQL:     16kB<br />Oracle:     2kB<br />PostgreSQL: 1GB<br />SQLite:     1 billion bytes<br />4D: Unknown, but LOBs are limited to 2GB.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.lobs&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.lobs.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pdo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="pdo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connections.php" title="Connections and Connection management">Connections and Connection management</a>
                        </li>
                                                <li class="">
                            <a href="pdo.transactions.php" title="Transactions and auto-&#8203;commit">Transactions and auto-&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="pdo.prepared-statements.php" title="Prepared statements and stored procedures">Prepared statements and stored procedures</a>
                        </li>
                                                <li class="">
                            <a href="pdo.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="current">
                            <a href="pdo.lobs.php" title="Large Objects (LOBs)">Large Objects (LOBs)</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo.php" title="PDO">PDO</a>
                        </li>
                                                <li class="">
                            <a href="class.pdostatement.php" title="PDOStatement">PDOStatement</a>
                        </li>
                                                <li class="">
                            <a href="class.pdorow.php" title="PDORow">PDORow</a>
                        </li>
                                                <li class="">
                            <a href="class.pdoexception.php" title="PDOException">PDOException</a>
                        </li>
                                                <li class="">
                            <a href="pdo.drivers.php" title="PDO Drivers">PDO Drivers</a>
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
