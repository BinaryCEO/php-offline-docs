<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/rar.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/rar.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/rar.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.rar.php">
 <link rel="prev" href="https://www.php.net/manual/en/rar.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.rar.php">

 <link rel="alternate" href="https://www.php.net/manual/en/rar.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/rar.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/rar.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/rar.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/rar.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/rar.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/rar.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/rar.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/rar.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/rar.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/rar.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="ref.rar.php">
          Rar Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="rar.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.rar.php'>Rar</a></li>      </ul>
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
            <option value='en/rar.examples.php' selected="selected">English</option>
            <option value='de/rar.examples.php'>German</option>
            <option value='es/rar.examples.php'>Spanish</option>
            <option value='fr/rar.examples.php'>French</option>
            <option value='it/rar.examples.php'>Italian</option>
            <option value='ja/rar.examples.php'>Japanese</option>
            <option value='pt_BR/rar.examples.php'>Brazilian Portuguese</option>
            <option value='ru/rar.examples.php'>Russian</option>
            <option value='tr/rar.examples.php'>Turkish</option>
            <option value='uk/rar.examples.php'>Ukrainian</option>
            <option value='zh/rar.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="rar.examples" class="chapter">
 <h1 class="title">Examples</h1>

 
 <p class="para">
  See also the examples under <a href="wrappers.rar.php" class="link"><code class="literal">rar://</code> wrapper</a>.
 </p>
 
 <p class="para">
  <div class="example" id="example-876">
   <p><strong>Example #1 On-the-fly decompression</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">"i"</span><span style="color: #007700">, </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">) || !</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">"i"</span><span style="color: #007700">]))<br />    die(</span><span style="color: #DD0000">"Index unspecified or non-numeric"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$index </span><span style="color: #007700">= (int) </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">"i"</span><span style="color: #007700">];<br />    <br /></span><span style="color: #0000BB">$arch </span><span style="color: #007700">= </span><span style="color: #0000BB">RarArchive</span><span style="color: #007700">::</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.rar"</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$arch </span><span style="color: #007700">=== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)<br />    die(</span><span style="color: #DD0000">"Cannot open example.rar"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$entries </span><span style="color: #007700">= </span><span style="color: #0000BB">$arch</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEntries</span><span style="color: #007700">();<br />if (</span><span style="color: #0000BB">$entries </span><span style="color: #007700">=== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)<br />    die(</span><span style="color: #DD0000">"Cannot retrieve entries"</span><span style="color: #007700">);<br /><br />if (!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$index</span><span style="color: #007700">, </span><span style="color: #0000BB">$entries</span><span style="color: #007700">))<br />    die(</span><span style="color: #DD0000">"No such index: </span><span style="color: #0000BB">$index</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$orfilename </span><span style="color: #007700">= </span><span style="color: #0000BB">$entries</span><span style="color: #007700">[</span><span style="color: #0000BB">$index</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(); </span><span style="color: #FF8000">//UTF-8 encoded<br /><br /></span><span style="color: #0000BB">$filesize </span><span style="color: #007700">= </span><span style="color: #0000BB">$entries</span><span style="color: #007700">[</span><span style="color: #0000BB">$index</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getUnpackedSize</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* you could check HTTP_IF_MODIFIED_SINCE here and compare with<br /> * $entries[$index]-&gt;getFileTime(). You could also send a<br /> * "Last modified" header */<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">$entries</span><span style="color: #007700">[</span><span style="color: #0000BB">$index</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getStream</span><span style="color: #007700">();<br />if (</span><span style="color: #0000BB">$fp </span><span style="color: #007700">=== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)<br />    die(</span><span style="color: #DD0000">"Cannot open file with index </span><span style="color: #0000BB">$index</span><span style="color: #DD0000"> insided the archive."</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$arch</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">(); </span><span style="color: #FF8000">//no longer needed; stream is independent<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">detectUserAgent</span><span style="color: #007700">() {<br />    if (!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">, </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">))<br />        return </span><span style="color: #DD0000">"Other"</span><span style="color: #007700">;<br />    <br />    </span><span style="color: #0000BB">$uas </span><span style="color: #007700">= </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">];<br />    if (</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"@Opera/@"</span><span style="color: #007700">, </span><span style="color: #0000BB">$uas</span><span style="color: #007700">))<br />        return </span><span style="color: #DD0000">"Opera"</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"@Firefox/@"</span><span style="color: #007700">, </span><span style="color: #0000BB">$uas</span><span style="color: #007700">))<br />        return </span><span style="color: #DD0000">"Firefox"</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"@Chrome/@"</span><span style="color: #007700">, </span><span style="color: #0000BB">$uas</span><span style="color: #007700">))<br />        return </span><span style="color: #DD0000">"Chrome"</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"@MSIE ([0-9.]+);@"</span><span style="color: #007700">, </span><span style="color: #0000BB">$uas</span><span style="color: #007700">, </span><span style="color: #0000BB">$matches</span><span style="color: #007700">)) {<br />        if (((float) </span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]) &gt;= </span><span style="color: #0000BB">7.0</span><span style="color: #007700">)<br />            return </span><span style="color: #DD0000">"IE"</span><span style="color: #007700">;<br />    }<br />    <br />    return </span><span style="color: #DD0000">"Other"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">/*<br /> * We have 3 options:<br /> * - For FF and Opera, which support RFC 2231, use that format.<br /> * - For IE and Chrome, use attwithfnrawpctenclong<br /> *   (http://greenbytes.de/tech/tc2231/#attwithfnrawpctenclong)<br /> * - For the others, convert to ISO-8859-1, if possible<br /> */<br /></span><span style="color: #0000BB">$formatRFC2231 </span><span style="color: #007700">= </span><span style="color: #DD0000">'Content-Disposition: attachment; filename*=UTF-8\'\'%s'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$formatDef </span><span style="color: #007700">= </span><span style="color: #DD0000">'Content-Disposition: attachment; filename="%s"'</span><span style="color: #007700">;<br /><br />switch (</span><span style="color: #0000BB">detectUserAgent</span><span style="color: #007700">()) {<br />    case </span><span style="color: #DD0000">"Opera"</span><span style="color: #007700">:<br />    case </span><span style="color: #DD0000">"Firefox"</span><span style="color: #007700">:<br />        </span><span style="color: #0000BB">$orfilename </span><span style="color: #007700">= </span><span style="color: #0000BB">rawurlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$orfilename</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #0000BB">$formatRFC2231</span><span style="color: #007700">;<br />        break;<br /><br />    case </span><span style="color: #DD0000">"IE"</span><span style="color: #007700">:<br />    case </span><span style="color: #DD0000">"Chrome"</span><span style="color: #007700">:<br />        </span><span style="color: #0000BB">$orfilename </span><span style="color: #007700">= </span><span style="color: #0000BB">rawurlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$orfilename</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #0000BB">$formatDef</span><span style="color: #007700">;<br />        break;<br />    default:<br />        if (</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'iconv'</span><span style="color: #007700">))<br />            </span><span style="color: #0000BB">$orfilename </span><span style="color: #007700">=<br />                @</span><span style="color: #0000BB">iconv</span><span style="color: #007700">(</span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1//TRANSLIT"</span><span style="color: #007700">, </span><span style="color: #0000BB">$orfilename</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #0000BB">$formatDef</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #0000BB">$orfilename</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">//cannot send error messages from now on (headers already sent)<br /><br />//replace by real content type, perhaps infering from the file extension<br /></span><span style="color: #0000BB">$contentType </span><span style="color: #007700">= </span><span style="color: #DD0000">"application/octet-stream"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: </span><span style="color: #0000BB">$contentType</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Transfer-Encoding: binary"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Length: </span><span style="color: #0000BB">$filesize</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">] == </span><span style="color: #DD0000">"HEAD"</span><span style="color: #007700">)<br />    die();<br />    <br />while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$s </span><span style="color: #007700">= @</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">8192</span><span style="color: #007700">);<br />    if (</span><span style="color: #0000BB">$s </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />        break; </span><span style="color: #FF8000">//useless to send error messages<br />  <br />    </span><span style="color: #007700">echo </span><span style="color: #0000BB">$s</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  This example opens a RAR file and presents the requested file inside the RAR archive for download to the client.
 </p>
 
 <p class="para">
  <div class="example" id="example-877">
   <p><strong>Example #2 RAR extension filesystem extraction example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$rar_file </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'example.rar'</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"Can't open Rar archive"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$entries </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_list</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$entries </span><span style="color: #007700">as </span><span style="color: #0000BB">$entry</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Filename: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">'Packed size: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPackedSize</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">'Unpacked size: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUnpackedSize</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dir/extract/to/'</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">rar_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  This example opens a RAR file archive and extracts each entry to the
  specified directory.
 </p>
 
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/rar/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frar.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=rar.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/rar.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100963">  <div class="votes">
    <div id="Vu100963">
    <a href="/manual/vote-note.php?id=100963&amp;page=rar.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100963">
    <a href="/manual/vote-note.php?id=100963&amp;page=rar.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100963" title="52% like this...">
    1
    </div>
  </div>
  <a href="#100963" class="name">
  <strong class="user"><em>Nitrogen</em></strong></a><a class="genanchor" href="#100963"> &para;</a><div class="date" title="2010-11-17 08:43"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100963">
<div class="phpcode"><code><span class="html">A veeery simple function to RAR files, I'm not proud of it.<br />Since there's no way to create RAR files in PHP (due to licensing, patents or whatever), I'm taking some advantage from the command-line RARing tool that comes with WinRAR (in the WinRAR program files named "rar.exe").<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">RARFiles</span><span class="keyword">(</span><span class="default">$Output</span><span class="keyword">=</span><span class="string">'output.rar'</span><span class="keyword">,</span><span class="default">$Files</span><span class="keyword">=array()) {<br />  </span><span class="default">$Data</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$Files</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$Data</span><span class="keyword">.=</span><span class="string">"\"</span><span class="keyword">{</span><span class="default">$Files</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]}</span><span class="string">\" "</span><span class="keyword">;<br />  </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"rar.exe a \"</span><span class="keyword">{</span><span class="default">$Output</span><span class="keyword">}</span><span class="string">\" </span><span class="keyword">{</span><span class="default">$Data</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$Files</span><span class="keyword">=array(</span><span class="string">'file1.ext'</span><span class="keyword">,</span><span class="string">'file2.ext'</span><span class="keyword">,</span><span class="string">'file3.ext'</span><span class="keyword">);<br /></span><span class="default">RARFiles</span><span class="keyword">(</span><span class="string">'asdf.rar'</span><span class="keyword">,</span><span class="default">$Files</span><span class="keyword">);<br /></span><span class="comment">// asdf.rar created.<br /></span><span class="default">?&gt;<br /></span><br />There's no error checking, so make sure you check that your expected RAR file exists before doing anything with it.<br />Hopefully one day, PHP will be able to be allowed to create RAR files.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=rar.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/rar.examples.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.rar.php">Rar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.rar.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="rar.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="rar.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="rar.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.rar.php" title="Rar Functions">Rar Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.rararchive.php" title="RarArchive">RarArchive</a>
                        </li>
                                                <li class="">
                            <a href="class.rarentry.php" title="RarEntry">RarEntry</a>
                        </li>
                                                <li class="">
                            <a href="class.rarexception.php" title="RarException">RarException</a>
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
