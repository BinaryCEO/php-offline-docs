<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: What References Do - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.whatdo.php">
 <link rel="shorturl" href="https://www.php.net/references.whatdo">
 <link rel="alternate" href="https://www.php.net/references.whatdo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.whatare.php">
 <link rel="next" href="https://www.php.net/manual/en/language.references.arent.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.whatdo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.whatdo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.whatdo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.whatdo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.whatdo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.whatdo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.whatdo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.whatdo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.whatdo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.whatdo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.whatdo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="What References Do" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: What References Do - Manual" />
<meta name="twitter:description" content="What References Do" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: What References Do - Manual" />
<meta itemprop="description" content="What References Do" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="What References Do" />

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
        <a href="language.references.arent.php">
          What References Are Not &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.whatare.php">
          &laquo; What References Are        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.references.php'>References Explained</a></li>      </ul>
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
            <option value='en/language.references.whatdo.php' selected="selected">English</option>
            <option value='de/language.references.whatdo.php'>German</option>
            <option value='es/language.references.whatdo.php'>Spanish</option>
            <option value='fr/language.references.whatdo.php'>French</option>
            <option value='it/language.references.whatdo.php'>Italian</option>
            <option value='ja/language.references.whatdo.php'>Japanese</option>
            <option value='pt_BR/language.references.whatdo.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.whatdo.php'>Russian</option>
            <option value='tr/language.references.whatdo.php'>Turkish</option>
            <option value='uk/language.references.whatdo.php'>Ukrainian</option>
            <option value='zh/language.references.whatdo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.whatdo" class="sect1">
   <h2 class="title">What References Do</h2>
   <p class="para">
    There are three basic operations performed using references:
    <a href="language.references.whatdo.php#language.references.whatdo.assign" class="link">assigning by
    reference</a>, <a href="language.references.whatdo.php#language.references.whatdo.pass" class="link">passing
    by reference</a>,
    and <a href="language.references.whatdo.php#language.references.whatdo.return" class="link">returning by
    reference</a>. This section will give an introduction to these
    operations, with links for further reading.
   </p>
   <div class="sect2" id="language.references.whatdo.assign">
    <h3 class="title">Assign By Reference</h3>
    <p class="para">
     In the first of these, PHP references allow you to make two
     variables refer to the same content. Meaning, when you do:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$a </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     it means that <var class="varname">$a</var> and <var class="varname">$b</var>
     point to the same content.
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       <var class="varname">$a</var> and <var class="varname">$b</var> are completely
       equal here. <var class="varname">$a</var> is not pointing to
       <var class="varname">$b</var> or vice versa.
       <var class="varname">$a</var> and <var class="varname">$b</var> are pointing to the
       same place.
      </p>
     </p></blockquote>
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      If you assign, pass, or return an undefined variable by reference, 
      it will get created.
      <div class="example" id="example-437">
       <p><strong>Example #1 Using references with undefined variables</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">) {}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); </span><span style="color: #FF8000">// $a is "created" and assigned to null<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'b'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)); </span><span style="color: #FF8000">// bool(true)<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">d</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">, </span><span style="color: #DD0000">'d'</span><span style="color: #007700">)); </span><span style="color: #FF8000">// bool(true)<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </p>
    </p></blockquote>
    <p class="para">
     The same syntax can be used with functions that return
     references:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$foo </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">find_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="para">
     Using the same syntax with a function that does <em>not</em>
     return by reference will give an error, as will using it with the result
     of the <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new</a> operator.
     Although objects are passed around as pointers, these are not the same as references,
     as explained under <a href="language.oop5.references.php" class="link">Objects and references</a>.
    </p>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      If you assign a reference to a variable declared <code class="literal">global</code>
      inside a function, the reference will be visible only inside the function.
      You can avoid this by using the <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array.
      <div class="example" id="example-438">
       <p><strong>Example #2 Referencing global variables inside functions</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"Example variable"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">global_references</span><span style="color: #007700">(</span><span style="color: #0000BB">$use_globals</span><span style="color: #007700">)<br />{<br />    global </span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">;<br /><br />    if (!</span><span style="color: #0000BB">$use_globals</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$var2 </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$var1</span><span style="color: #007700">; </span><span style="color: #FF8000">// visible only inside the function<br />    </span><span style="color: #007700">} else {<br />        </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"var2"</span><span style="color: #007700">] =&amp; </span><span style="color: #0000BB">$var1</span><span style="color: #007700">; </span><span style="color: #FF8000">// visible also in global context<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">global_references</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"var2 is set to '</span><span style="color: #0000BB">$var2</span><span style="color: #DD0000">'\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// var2 is set to ''<br /><br /></span><span style="color: #0000BB">global_references</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"var2 is set to '</span><span style="color: #0000BB">$var2</span><span style="color: #DD0000">'\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// var2 is set to 'Example variable'<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
      Think about <code class="literal">global $var;</code> as a shortcut to <code class="literal">$var
        =&amp; $GLOBALS[&#039;var&#039;];</code>. Thus assigning another reference
      to <code class="literal">$var</code> only changes the local variable&#039;s reference.
     </p>
    </div>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      If you assign a value to a variable with references in a 
      <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> statement, the references are modified too.
      <div class="example" id="example-439">
       <p><strong>Example #3 References and foreach statement</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$ref </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$ref</span><span style="color: #007700">;<br /><br />foreach (array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">) as </span><span style="color: #0000BB">$row</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Do something<br /></span><span style="color: #007700">}<br /><br />echo </span><span style="color: #0000BB">$ref</span><span style="color: #007700">; </span><span style="color: #FF8000">// 3 - last element of the iterated array<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </p>
    </p></blockquote>
    <p class="para">
     While not being strictly an assignment by reference, expressions created
     with the language construct
     <a href="function.array.php" class="link"><code class="literal">array()</code></a> can also
     behave as such by prefixing <code class="literal">&amp;</code> to the array element
     to add. Example:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= array(&amp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], &amp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]++;<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]++;<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]++;<br /></span><span style="color: #FF8000">/* $a == 2, $b == array(3, 4); */<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="para">
     Note, however, that references inside arrays are potentially dangerous.
     Doing a normal (not by reference) assignment with a reference on the
     right side does not turn the left side into a reference, but references
     inside arrays are preserved in these normal assignments. This also applies
     to function calls where the array is passed by value. Example:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Assignment of scalar variables */<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">7</span><span style="color: #007700">; </span><span style="color: #FF8000">// $c is not a reference; no change to $a or $b<br /><br />/* Assignment of array variables */<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]; </span><span style="color: #FF8000">// $a and $arr[0] are in the same reference set<br /></span><span style="color: #0000BB">$arr2 </span><span style="color: #007700">= </span><span style="color: #0000BB">$arr</span><span style="color: #007700">; </span><span style="color: #FF8000">// Not an assignment-by-reference!<br /></span><span style="color: #0000BB">$arr2</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]++;<br /></span><span style="color: #FF8000">/* $a == 2, $arr == array(2) */<br />/* The contents of $arr are changed even though it's not a reference! */<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     In other words, the reference behavior of arrays is defined in an
     element-by-element basis; the reference behavior of individual elements
     is dissociated from the reference status of the array container.
    </p>
   </div>
   <div class="sect2" id="language.references.whatdo.pass">
    <h3 class="title">Pass By Reference</h3>
    <p class="para">
     The second thing references do is to pass variables by
     reference. This is done by making a local variable in a function
     and a variable in the calling scope referencing the same
     content. Example:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$var</span><span style="color: #007700">++;<br />}<br /><br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">=</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     will make <var class="varname">$a</var> to be 6. This happens because in
     the function <var class="varname">foo</var> the variable
     <var class="varname">$var</var> refers to the same content as
     <var class="varname">$a</var>. For more information on this, read
     the <a href="language.references.pass.php" class="link">passing by
       reference</a> section.
    </p>
   </div>
   <div class="sect2" id="language.references.whatdo.return">
    <h3 class="title">Return By Reference</h3>
    <p class="para">
     The third thing references can do is <a href="language.references.return.php" class="link">return by reference</a>.
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/references.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.whatdo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.whatdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.whatdo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="51964">  <div class="votes">
    <div id="Vu51964">
    <a href="/manual/vote-note.php?id=51964&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51964">
    <a href="/manual/vote-note.php?id=51964&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51964" title="79% like this...">
    74
    </div>
  </div>
  <a href="#51964" class="name">
  <strong class="user"><em>ladoo at gmx dot at</em></strong></a><a class="genanchor" href="#51964"> &para;</a><div class="date" title="2005-04-17 02:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51964">
<div class="phpcode"><code><span class="html">I ran into something when using an expanded version of the example of pbaltz at NO_SPAM dot cs dot NO_SPAM dot wisc dot edu below.<br />This could be somewhat confusing although it is perfectly clear if you have read the manual carfully. It makes the fact that references always point to the content of a variable perfectly clear (at least to me).<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// $b points to 1<br /></span><span class="default">$a </span><span class="keyword">=&amp; </span><span class="default">$c</span><span class="keyword">; </span><span class="comment">// $a points now to 2, but $b still to 1;<br /></span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="comment">// Output: 2 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78375">  <div class="votes">
    <div id="Vu78375">
    <a href="/manual/vote-note.php?id=78375&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78375">
    <a href="/manual/vote-note.php?id=78375&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78375" title="76% like this...">
    36
    </div>
  </div>
  <a href="#78375" class="name">
  <strong class="user"><em>Hlavac</em></strong></a><a class="genanchor" href="#78375"> &para;</a><div class="date" title="2007-10-09 02:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78375">
<div class="phpcode"><code><span class="html">Watch out for this:<br /><br />foreach ($somearray as &amp;$i) {<br />  // update some $i...<br />}<br />...<br />foreach ($somearray as $i) {<br />  // last element of $somearray is mysteriously overwritten!<br />}<br /><br />Problem is $i contians reference to last element of $somearray after the first foreach, and the second foreach happily assigns to it!</span></code></div>
  </div>
 </div>
  <div class="note" id="102123">  <div class="votes">
    <div id="Vu102123">
    <a href="/manual/vote-note.php?id=102123&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102123">
    <a href="/manual/vote-note.php?id=102123&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102123" title="65% like this...">
    25
    </div>
  </div>
  <a href="#102123" class="name">
  <strong class="user"><em>elrah [] polyptych [dot] com</em></strong></a><a class="genanchor" href="#102123"> &para;</a><div class="date" title="2011-01-27 10:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102123">
<div class="phpcode"><code><span class="html">It appears that references can have side-effects.  Below are two examples.  Both are simply copying one array to another.  In the second example, a reference is made to a value in the first array before the copy.  In the first example the value at index 0 points to two separate memory locations. In the second example, the value at index 0 points to the same memory location. <br /><br />I won't say this is a bug, because I don't know what the designed behavior of PHP is, but I don't think ANY developers would expect this behavior, so look out.<br /><br />An example of where this could cause problems is if you do an array copy in a script and expect on type of behavior, but then later add a reference to a value in the array earlier in the script, and then find that the array copy behavior has unexpectedly changed.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Example one<br /></span><span class="default">$arr1 </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">);<br />echo </span><span class="string">"\nbefore:\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr1[0] == </span><span class="keyword">{</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">$arr1</span><span class="keyword">;<br /></span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]++;<br />echo </span><span class="string">"\nafter:\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr1[0] == </span><span class="keyword">{</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr2[0] == </span><span class="keyword">{</span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Example two<br /></span><span class="default">$arr3 </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">=&amp; </span><span class="default">$arr3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />echo </span><span class="string">"\nbefore:\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$a == </span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr3[0] == </span><span class="keyword">{</span><span class="default">$arr3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">$arr4 </span><span class="keyword">= </span><span class="default">$arr3</span><span class="keyword">;<br /></span><span class="default">$arr4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]++;<br />echo </span><span class="string">"\nafter:\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$a == </span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr3[0] == </span><span class="keyword">{</span><span class="default">$arr3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$arr4[0] == </span><span class="keyword">{</span><span class="default">$arr4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75629">  <div class="votes">
    <div id="Vu75629">
    <a href="/manual/vote-note.php?id=75629&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75629">
    <a href="/manual/vote-note.php?id=75629&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75629" title="70% like this...">
    11
    </div>
  </div>
  <a href="#75629" class="name">
  <strong class="user"><em>amp at gmx dot info</em></strong></a><a class="genanchor" href="#75629"> &para;</a><div class="date" title="2007-06-08 10:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75629">
<div class="phpcode"><code><span class="html">Something that might not be obvious on the first look:<br />If you want to cycle through an array with references, you must not use a simple value assigning foreach control structure. You have to use an extended key-value assigning foreach or a for control structure.<br /><br />A simple value assigning foreach control structure produces a copy of an object or value. The following code<br /><br />$v1=0;<br />$arrV=array(&amp;$v1,&amp;$v1);<br />foreach ($arrV as $v)<br />{<br />  $v1++;<br />  echo $v."\n";<br />}<br /><br />yields<br /><br />0<br />1<br /><br />which means $v in foreach is not a reference to $v1 but a copy of the object the actual element in the array was referencing to.<br /><br />The codes<br /><br />$v1=0;<br />$arrV=array(&amp;$v1,&amp;$v1);<br />foreach ($arrV as $k=&gt;$v)<br />{<br />    $v1++;<br />    echo $arrV[$k]."\n";<br />}<br /><br />and<br /><br />$v1=0;<br />$arrV=array(&amp;$v1,&amp;$v1);<br />$c=count($arrV);<br />for ($i=0; $i&lt;$c;$i++)<br />{<br />    $v1++;<br />    echo $arrV[$i]."\n";<br />}<br /><br />both yield<br /><br />1<br />2<br /><br />and therefor cycle through the original objects (both $v1), which is, in terms of our aim, what we have been looking for.<br /><br />(tested with php 4.1.3)</span></code></div>
  </div>
 </div>
  <div class="note" id="118508">  <div class="votes">
    <div id="Vu118508">
    <a href="/manual/vote-note.php?id=118508&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118508">
    <a href="/manual/vote-note.php?id=118508&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118508" title="70% like this...">
    4
    </div>
  </div>
  <a href="#118508" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118508"> &para;</a><div class="date" title="2015-12-17 05:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118508">
<div class="phpcode"><code><span class="html">to reply to ' elrah [] polyptych [dot] com ', one thing to keep in mind is that array (or similar large data holders) are by default passed by reference. So the behaviour is not side effect. And for array copy and passing array inside function  always done by 'pass by reference'...</span></code></div>
  </div>
 </div>
  <div class="note" id="104813">  <div class="votes">
    <div id="Vu104813">
    <a href="/manual/vote-note.php?id=104813&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104813">
    <a href="/manual/vote-note.php?id=104813&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104813" title="65% like this...">
    9
    </div>
  </div>
  <a href="#104813" class="name">
  <strong class="user"><em>nay at woodcraftsrus dot com</em></strong></a><a class="genanchor" href="#104813"> &para;</a><div class="date" title="2011-07-08 09:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104813">
<div class="phpcode"><code><span class="html">in PHP you don't really need pointer anymore if you want to share an  object across your program
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">foo</span><span class="keyword">{
<br />        protected </span><span class="default">$name</span><span class="keyword">;
<br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">__toString</span><span class="keyword">(){
<br />                return  </span><span class="string">'my name is "'</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">.</span><span class="string">'" and I live in "' </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">'".' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">setName</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">;
<br />        }
<br />}
<br />
<br />class </span><span class="default">MasterOne</span><span class="keyword">{
<br />        protected </span><span class="default">$foo</span><span class="keyword">;
<br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">__toString</span><span class="keyword">(){
<br />                return </span><span class="string">'Master: ' </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">' | foo: ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">setFooName</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">);
<br />        }
<br />}
<br />
<br />class </span><span class="default">MasterTwo</span><span class="keyword">{
<br />        protected </span><span class="default">$foo</span><span class="keyword">;
<br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">__toString</span><span class="keyword">(){
<br />                return </span><span class="string">'Master: ' </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">' | foo: ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        }
<br />        function </span><span class="default">setFooName</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">);
<br />        }
<br />}
<br />
<br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Only Created \$bar and printing \$bar\n"</span><span class="keyword">);
<br />print( </span><span class="default">$bar </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Now \$baz is referenced to \$bar and printing \$bar and \$baz\n"</span><span class="keyword">);
<br /></span><span class="default">$baz </span><span class="keyword">=&amp; </span><span class="default">$bar</span><span class="keyword">;
<br />print( </span><span class="default">$bar </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Now Creating MasterOne and Two and passing \$bar to both constructors\n"</span><span class="keyword">);
<br /></span><span class="default">$m1 </span><span class="keyword">= new </span><span class="default">MasterOne</span><span class="keyword">( </span><span class="default">$bar </span><span class="keyword">);
<br /></span><span class="default">$m2 </span><span class="keyword">= new </span><span class="default">MasterTwo</span><span class="keyword">( </span><span class="default">$bar </span><span class="keyword">);
<br />print( </span><span class="default">$m1 </span><span class="keyword">);
<br />print( </span><span class="default">$m2 </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Now changing value of \$bar and printing \$bar and \$baz\n"</span><span class="keyword">);
<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">(</span><span class="string">'baz'</span><span class="keyword">);
<br />print( </span><span class="default">$bar </span><span class="keyword">);
<br />print( </span><span class="default">$baz </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Now printing again MasterOne and Two\n"</span><span class="keyword">);
<br />print( </span><span class="default">$m1 </span><span class="keyword">);
<br />print( </span><span class="default">$m2 </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"\n"</span><span class="keyword">);
<br />print(</span><span class="string">"Now changing MasterTwo's foo name and printing again MasterOne and Two\n"</span><span class="keyword">);
<br /></span><span class="default">$m2</span><span class="keyword">-&gt;</span><span class="default">setFooName</span><span class="keyword">( </span><span class="string">'MasterTwo\'s Foo' </span><span class="keyword">);
<br />print( </span><span class="default">$m1 </span><span class="keyword">);
<br />print( </span><span class="default">$m2 </span><span class="keyword">);
<br />
<br />print(</span><span class="string">"Also printing \$bar and \$baz\n"</span><span class="keyword">);
<br />print( </span><span class="default">$bar </span><span class="keyword">);
<br />print( </span><span class="default">$baz </span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126293">  <div class="votes">
    <div id="Vu126293">
    <a href="/manual/vote-note.php?id=126293&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126293">
    <a href="/manual/vote-note.php?id=126293&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126293" title="60% like this...">
    1
    </div>
  </div>
  <a href="#126293" class="name">
  <strong class="user"><em>dexant9t at gmail dot com</em></strong></a><a class="genanchor" href="#126293"> &para;</a><div class="date" title="2021-07-31 04:10"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126293">
<div class="phpcode"><code><span class="html">It matters if you are playing with a reference or with a value<br /><br />Here we are working with values so working on a reference updates original variable too;<br /><br />$a = 1;<br />$c = 22;<br /><br />$b = &amp; $a;<br />echo "$a, $b"; //Output: 1, 1<br /><br />$b++;<br />echo "$a, $b";//Output: 2, 2 both values are updated<br /><br />$b = 10;<br />echo "$a, $b";//Output: 10, 10 both values are updated<br /><br />$b =$c; //This assigns value 2 to $b which also updates $a<br />echo "$a, $b";//Output: 22, 22<br /><br />But, if instead of $b=$c you do<br />$b = &amp;$c; //Only value of $b is updated, $a still points to 10, $b serves now reference to variable $c<br /><br />echo "$a, $b"//Output: 10, 22</span></code></div>
  </div>
 </div>
  <div class="note" id="78614">  <div class="votes">
    <div id="Vu78614">
    <a href="/manual/vote-note.php?id=78614&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78614">
    <a href="/manual/vote-note.php?id=78614&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78614" title="58% like this...">
    5
    </div>
  </div>
  <a href="#78614" class="name">
  <strong class="user"><em>charles at org oo dot com</em></strong></a><a class="genanchor" href="#78614"> &para;</a><div class="date" title="2007-10-19 03:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78614">
<div class="phpcode"><code><span class="html">points to post below me. <br />When you're doing the references with loops, you need to unset($var). <br /><br />for example <br /><span class="default">&lt;?php <br /></span><span class="keyword">foreach(</span><span class="default">$var </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">)<br />{<br />...<br />}<br />unset(</span><span class="default">$value</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47416">  <div class="votes">
    <div id="Vu47416">
    <a href="/manual/vote-note.php?id=47416&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47416">
    <a href="/manual/vote-note.php?id=47416&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47416" title="60% like this...">
    3
    </div>
  </div>
  <a href="#47416" class="name">
  <strong class="user"><em>php.devel at homelinkcs dot com</em></strong></a><a class="genanchor" href="#47416"> &para;</a><div class="date" title="2004-11-15 03:16"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47416">
<div class="phpcode"><code><span class="html">In reply to lars at riisgaardribe dot dk, <br /><br />When a variable is copied, a reference is used internally until the copy is modified.  Therefore you shouldn't use references at all in your situation as it doesn't save any memory usage and increases the chance of logic bugs, as you discoved.</span></code></div>
  </div>
 </div>
  <div class="note" id="95692">  <div class="votes">
    <div id="Vu95692">
    <a href="/manual/vote-note.php?id=95692&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95692">
    <a href="/manual/vote-note.php?id=95692&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95692" title="57% like this...">
    5
    </div>
  </div>
  <a href="#95692" class="name">
  <strong class="user"><em>Amaroq</em></strong></a><a class="genanchor" href="#95692"> &para;</a><div class="date" title="2010-01-16 03:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95692">
<div class="phpcode"><code><span class="html">I think a correction to my last post is in order.<br /><br />When there is a constructor, the strange behavior mentioned in my last post doesn't occur. My guess is that php was treating reftest() as a constructor (maybe because it was the first function?) and running it upon instantiation.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">reftest<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        return </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">reftest</span><span class="keyword">()<br />    {<br />        </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;<br />        </span><span class="default">$b</span><span class="keyword">++;<br />    }<br /><br />    public function </span><span class="default">reftest2</span><span class="keyword">()<br />    {<br />        </span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;<br />        </span><span class="default">$d</span><span class="keyword">++;<br />    }<br />}<br /><br /></span><span class="default">$reference </span><span class="keyword">= new </span><span class="default">reftest</span><span class="keyword">();<br /><br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest</span><span class="keyword">();<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest2</span><span class="keyword">();<br /><br />echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="keyword">echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101750">  <div class="votes">
    <div id="Vu101750">
    <a href="/manual/vote-note.php?id=101750&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101750">
    <a href="/manual/vote-note.php?id=101750&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101750" title="56% like this...">
    2
    </div>
  </div>
  <a href="#101750" class="name">
  <strong class="user"><em>akinaslan at gmail dot com</em></strong></a><a class="genanchor" href="#101750"> &para;</a><div class="date" title="2011-01-08 05:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101750">
<div class="phpcode"><code><span class="html">In this example class name is different from its first function and however there is no construction function. In the end as you guess "a" and "c" are equal. So if there is no construction function at same time class and its first function names are the same, "a" and "c" doesn't equal forever. In my opinion php doesn't seek any function for the construction as long as their names differ from each others.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">reftest_new
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />    public </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">reftest</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;
<br />        </span><span class="default">$b</span><span class="keyword">++;
<br />    }
<br />
<br />    public function </span><span class="default">reftest2</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;
<br />        </span><span class="default">$d</span><span class="keyword">++;
<br />    }
<br />}
<br />
<br /></span><span class="default">$reference </span><span class="keyword">= new </span><span class="default">reftest_new</span><span class="keyword">();
<br />
<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest</span><span class="keyword">();
<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest2</span><span class="keyword">();
<br />
<br />echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">; </span><span class="comment">//Echoes 2.
<br /></span><span class="keyword">echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">; </span><span class="comment">//Echoes 2.
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83732">  <div class="votes">
    <div id="Vu83732">
    <a href="/manual/vote-note.php?id=83732&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83732">
    <a href="/manual/vote-note.php?id=83732&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83732" title="55% like this...">
    2
    </div>
  </div>
  <a href="#83732" class="name">
  <strong class="user"><em>dnhuff at acm dot org</em></strong></a><a class="genanchor" href="#83732"> &para;</a><div class="date" title="2008-06-09 11:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83732">
<div class="phpcode"><code><span class="html">In reply to Drewseph using foo($a = 'set'); where $a is a reference formal parameter.<br /><br />$a = 'set' is an expression. Expressions cannot be passed by reference, don't you just hate that, I do. If you turn on error reporting for E_NOTICE, you will be told about it.<br /><br />Resolution: $a = 'set'; foo($a); this does what you want.</span></code></div>
  </div>
 </div>
  <div class="note" id="76227">  <div class="votes">
    <div id="Vu76227">
    <a href="/manual/vote-note.php?id=76227&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76227">
    <a href="/manual/vote-note.php?id=76227&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76227" title="55% like this...">
    2
    </div>
  </div>
  <a href="#76227" class="name">
  <strong class="user"><em>dovbysh at gmail dot com</em></strong></a><a class="genanchor" href="#76227"> &para;</a><div class="date" title="2007-07-06 12:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76227">
<div class="phpcode"><code><span class="html">Solution to post "php at hood dot id dot au 04-Mar-2007 10:56":<br /><br /><span class="default">&lt;?php<br />$a1 </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">$a2 </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$a1 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;&amp;</span><span class="default">$v</span><span class="keyword">)<br /></span><span class="default">$v </span><span class="keyword">= </span><span class="string">'x'</span><span class="keyword">;<br /><br />echo </span><span class="default">$a1</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]; </span><span class="comment">// will echo x<br /><br /></span><span class="keyword">unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'v'</span><span class="keyword">]);<br /><br />foreach (</span><span class="default">$a2 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)<br />{}<br /><br />echo </span><span class="default">$a1</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]; </span><span class="comment">// will echo x<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74278">  <div class="votes">
    <div id="Vu74278">
    <a href="/manual/vote-note.php?id=74278&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74278">
    <a href="/manual/vote-note.php?id=74278&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74278" title="55% like this...">
    2
    </div>
  </div>
  <a href="#74278" class="name">
  <strong class="user"><em>firespade at gmail dot com</em></strong></a><a class="genanchor" href="#74278"> &para;</a><div class="date" title="2007-04-03 07:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74278">
<div class="phpcode"><code><span class="html">Here's a good little example of referencing. It was the best way for me to understand, hopefully it can help others.<br /><br />$b = 2;<br />$a =&amp; $b;<br />$c = $a;<br />echo $c;<br /><br />// Then... $c = 2</span></code></div>
  </div>
 </div>
  <div class="note" id="112321">  <div class="votes">
    <div id="Vu112321">
    <a href="/manual/vote-note.php?id=112321&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112321">
    <a href="/manual/vote-note.php?id=112321&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112321" title="53% like this...">
    2
    </div>
  </div>
  <a href="#112321" class="name">
  <strong class="user"><em>Oddant</em></strong></a><a class="genanchor" href="#112321"> &para;</a><div class="date" title="2013-06-01 08:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112321">
<div class="phpcode"><code><span class="html">About the example on array references.<br />I think this should be written in the array chapter as well.<br />Indeed if you are new to programming language in some way, you should beware that arrays are pointers to a vector of Byte(s).<br /><br /><span class="default">&lt;?php $arr </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">); </span><span class="default">?&gt;<br /></span>$arr here contains a reference to which the array is located.<br />Writing :<br /><span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="default">?&gt;<br /></span>dereferences the array to access its very first element.<br /><br />Now something that you should also be aware of  (even you are not new to programming languages) is that PHP use references to contains the different values of an array. And that makes sense because the type of the elements of a PHP array can be different.<br /><br />Consider the following example :<br /><br /><span class="default">&lt;?php<br /><br />$arr </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="string">'test'</span><span class="keyword">);<br /><br /></span><span class="default">$point_to_test </span><span class="keyword">=&amp; </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="default">$new_ref </span><span class="keyword">= </span><span class="string">'new'</span><span class="keyword">;<br /><br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&amp; </span><span class="default">$new_ref</span><span class="keyword">;<br /><br />echo </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; </span><span class="comment">// echo 'new';<br /></span><span class="keyword">echo </span><span class="default">$point_to_test</span><span class="keyword">; </span><span class="comment">// echo 'test' ! (still pointed somewhere in the memory)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82206">  <div class="votes">
    <div id="Vu82206">
    <a href="/manual/vote-note.php?id=82206&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82206">
    <a href="/manual/vote-note.php?id=82206&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82206" title="54% like this...">
    2
    </div>
  </div>
  <a href="#82206" class="name">
  <strong class="user"><em>Amaroq</em></strong></a><a class="genanchor" href="#82206"> &para;</a><div class="date" title="2008-03-31 10:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82206">
<div class="phpcode"><code><span class="html">The order in which you reference your variables matters.<br /><br /><span class="default">&lt;?php<br />$a1 </span><span class="keyword">= </span><span class="string">"One"</span><span class="keyword">;<br /></span><span class="default">$a2 </span><span class="keyword">= </span><span class="string">"Two"</span><span class="keyword">;<br /></span><span class="default">$b1 </span><span class="keyword">= </span><span class="string">"Three"</span><span class="keyword">;<br /></span><span class="default">$b2 </span><span class="keyword">= </span><span class="string">"Four"</span><span class="keyword">;<br /><br /></span><span class="default">$b1 </span><span class="keyword">=&amp; </span><span class="default">$a1</span><span class="keyword">;<br /></span><span class="default">$a2 </span><span class="keyword">=&amp; </span><span class="default">$b2</span><span class="keyword">;<br /><br />echo </span><span class="default">$a1</span><span class="keyword">; </span><span class="comment">//Echoes "One"<br /></span><span class="keyword">echo </span><span class="default">$b1</span><span class="keyword">; </span><span class="comment">//Echoes "One"<br /><br /></span><span class="keyword">echo </span><span class="default">$a2</span><span class="keyword">; </span><span class="comment">//Echoes "Four"<br /></span><span class="keyword">echo </span><span class="default">$b2</span><span class="keyword">; </span><span class="comment">//Echoes "Four"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83521">  <div class="votes">
    <div id="Vu83521">
    <a href="/manual/vote-note.php?id=83521&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83521">
    <a href="/manual/vote-note.php?id=83521&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83521" title="54% like this...">
    2
    </div>
  </div>
  <a href="#83521" class="name">
  <strong class="user"><em>Drewseph</em></strong></a><a class="genanchor" href="#83521"> &para;</a><div class="date" title="2008-05-29 04:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83521">
<div class="phpcode"><code><span class="html">If you set a variable before passing it to a function that takes a variable as a reference, it is much harder (if not impossible) to edit the variable within the function.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(&amp;</span><span class="default">$bar</span><span class="keyword">) {<br />    </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">"hello\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">$unset</span><span class="keyword">);<br />echo(</span><span class="default">$unset</span><span class="keyword">);<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">$set </span><span class="keyword">= </span><span class="string">"set\n"</span><span class="keyword">);<br />echo(</span><span class="default">$set</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />hello<br />set<br /><br />It baffles me, but there you have it.</span></code></div>
  </div>
 </div>
  <div class="note" id="73631">  <div class="votes">
    <div id="Vu73631">
    <a href="/manual/vote-note.php?id=73631&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73631">
    <a href="/manual/vote-note.php?id=73631&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73631" title="52% like this...">
    1
    </div>
  </div>
  <a href="#73631" class="name">
  <strong class="user"><em>php at hood dot id dot au</em></strong></a><a class="genanchor" href="#73631"> &para;</a><div class="date" title="2007-03-04 10:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73631">
<div class="phpcode"><code><span class="html">I discovered something today using references in a foreach<br /><br /><span class="default">&lt;?php<br />$a1 </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">$a2 </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$a1 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;&amp;</span><span class="default">$v</span><span class="keyword">)<br /></span><span class="default">$v </span><span class="keyword">= </span><span class="string">'x'</span><span class="keyword">;<br /><br />echo </span><span class="default">$a1</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]; </span><span class="comment">// will echo x<br /><br /></span><span class="keyword">foreach (</span><span class="default">$a2 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)<br />{}<br /><br />echo </span><span class="default">$a1</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]; </span><span class="comment">// will echo b (!)<br /></span><span class="default">?&gt;<br /></span><br />After reading the manual this looks like it is meant to happen. But it confused me for a few days!<br /><br />(The solution I used was to turn the second foreach into a reference too)</span></code></div>
  </div>
 </div>
  <div class="note" id="95681">  <div class="votes">
    <div id="Vu95681">
    <a href="/manual/vote-note.php?id=95681&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95681">
    <a href="/manual/vote-note.php?id=95681&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95681" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95681" class="name">
  <strong class="user"><em>Amaroq</em></strong></a><a class="genanchor" href="#95681"> &para;</a><div class="date" title="2010-01-15 06:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95681">
<div class="phpcode"><code><span class="html">When using references in a class, you can reference $this-&gt; variables.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">reftest<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    public function </span><span class="default">reftest</span><span class="keyword">()<br />    {<br />        </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">reftest2</span><span class="keyword">()<br />    {<br />        </span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;<br />        </span><span class="default">$d</span><span class="keyword">++;<br />    }<br />}<br /><br /></span><span class="default">$reference </span><span class="keyword">= new </span><span class="default">reftest</span><span class="keyword">();<br /><br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest</span><span class="keyword">();<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest2</span><span class="keyword">();<br /><br />echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="keyword">echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="default">?&gt;<br /></span><br />However, this doesn't appear to be completely trustworthy. In some cases, it can act strangely.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">reftest<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    public function </span><span class="default">reftest</span><span class="keyword">()<br />    {<br />        </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;<br />        </span><span class="default">$b</span><span class="keyword">++;<br />    }<br /><br />    public function </span><span class="default">reftest2</span><span class="keyword">()<br />    {<br />        </span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;<br />        </span><span class="default">$d</span><span class="keyword">++;<br />    }<br />}<br /><br /></span><span class="default">$reference </span><span class="keyword">= new </span><span class="default">reftest</span><span class="keyword">();<br /><br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest</span><span class="keyword">();<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest2</span><span class="keyword">();<br /><br />echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">; </span><span class="comment">//Echoes 3.<br /></span><span class="keyword">echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="default">?&gt;<br /></span><br />In this second code block, I've changed reftest() so that $b increments instead of just gets changed to 2. Somehow, it winds up equaling 3 instead of 2 as it should.</span></code></div>
  </div>
 </div>
  <div class="note" id="111409">  <div class="votes">
    <div id="Vu111409">
    <a href="/manual/vote-note.php?id=111409&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111409">
    <a href="/manual/vote-note.php?id=111409&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111409" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#111409" class="name">
  <strong class="user"><em>butshuti at smartrwanda dot org</em></strong></a><a class="genanchor" href="#111409"> &para;</a><div class="date" title="2013-02-17 06:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111409">
<div class="phpcode"><code><span class="html">This appears to be the hidden behavior: When a class function has the same name as the class, it seems to be implicitly called when an object of the class is created.<br />For instance, you may take a look at the naming of the function "reftest()": it is in the class "reftest". The behavior can be tested as follows:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">reftest<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public </span><span class="default">$c </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    public function </span><span class="default">reftest1</span><span class="keyword">()<br />    {<br />        </span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">;<br />        </span><span class="default">$b</span><span class="keyword">++;<br />    }<br /><br />    public function </span><span class="default">reftest2</span><span class="keyword">()<br />    {<br />        </span><span class="default">$d </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;<br />        </span><span class="default">$d</span><span class="keyword">++;<br />    }<br />    <br />    public function </span><span class="default">reftest</span><span class="keyword">()<br />    {<br />       echo </span><span class="string">"REFTEST() called here!\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$reference </span><span class="keyword">= new </span><span class="default">reftest</span><span class="keyword">();<br /></span><span class="comment">/*You must notice the above will also implicitly call reference-&gt;reftest()*/<br /><br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest1</span><span class="keyword">();<br /></span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">reftest2</span><span class="keyword">();<br /><br />echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">//Echoes 2, not 3 as previously noticed.<br /></span><span class="keyword">echo </span><span class="default">$reference</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">//Echoes 2.<br /></span><span class="default">?&gt;<br /></span><br />The above outputs:<br /><br />REFTEST() called here!<br />2<br />2<br /><br />Notice that reftest() appears to be called (though no explicit call to it was made)!</span></code></div>
  </div>
 </div>
  <div class="note" id="31134">  <div class="votes">
    <div id="Vu31134">
    <a href="/manual/vote-note.php?id=31134&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31134">
    <a href="/manual/vote-note.php?id=31134&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31134" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#31134" class="name">
  <strong class="user"><em>joachim at lous dot org</em></strong></a><a class="genanchor" href="#31134"> &para;</a><div class="date" title="2003-04-10 03:46"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31134">
<div class="phpcode"><code><span class="html">So to make a by-reference setter function, you need to specify reference semantics _both_ in the parameter list _and_ the assignment, like this:<br /><br />class foo{<br />   var $bar;<br />   function setBar(&amp;$newBar){<br />      $this-&gt;bar =&amp; newBar;<br />   }<br />}<br /><br />Forget any of the two '&amp;'s, and $foo-&gt;bar will end up being a copy after the call to setBar.</span></code></div>
  </div>
 </div>
  <div class="note" id="93762">  <div class="votes">
    <div id="Vu93762">
    <a href="/manual/vote-note.php?id=93762&amp;page=language.references.whatdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93762">
    <a href="/manual/vote-note.php?id=93762&amp;page=language.references.whatdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93762" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#93762" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#93762"> &para;</a><div class="date" title="2009-09-26 03:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93762">
<div class="phpcode"><code><span class="html">An interesting if offbeat use for references:  Creating an array with an arbitrary number of dimensions.<br /><br />For example, a function that takes the result set from a database and produces a multidimensional array keyed according to one (or more) columns, which might be useful if you want your result set to be accessible in a hierarchial manner, or even if you just want your results keyed by the values of each row's primary/unique key fields.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_key_by</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$dupl </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br /></span><span class="comment">/* <br /> * $data  - Multidimensional array to be keyed<br /> * $keys  - List containing the index/key(s) to use.<br /> * $dupl  - How to handle rows containing the same values.  TRUE stores it as an Array, FALSE overwrites the previous row.<br /> *          <br /> * Returns a multidimensional array indexed by $keys, or NULL if error.<br /> * The number of dimensions is equal to the number of $keys provided (+1 if $dupl=TRUE).<br /> */   <br /></span><span class="keyword">{<br />    </span><span class="comment">// Sanity check<br />    </span><span class="keyword">if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) return </span><span class="default">null</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Allow passing single key as a scalar<br />    </span><span class="keyword">if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">) or </span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) </span><span class="default">$keys </span><span class="keyword">= Array(</span><span class="default">$keys</span><span class="keyword">);<br />    elseif (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) return </span><span class="default">null</span><span class="keyword">;<br /><br />    </span><span class="comment">// Our output array<br />    </span><span class="default">$out </span><span class="keyword">= Array();<br />    <br />    </span><span class="comment">// Loop through each row of our input $data<br />    </span><span class="keyword">foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$cx </span><span class="keyword">=&gt; </span><span class="default">$row</span><span class="keyword">) if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">))<br />    {<br />      <br />      </span><span class="comment">// Loop through our $keys<br />      </span><span class="keyword">foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">)<br />      {<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br /><br />        if (!isset(</span><span class="default">$last</span><span class="keyword">)) </span><span class="comment">// First $key only<br />        </span><span class="keyword">{<br />          if (!isset(</span><span class="default">$out</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">])) </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = Array();<br />          </span><span class="default">$last </span><span class="keyword">=&amp; </span><span class="default">$out</span><span class="keyword">; </span><span class="comment">// Bind $last to $out<br />        </span><span class="keyword">}<br />        else </span><span class="comment">// Second and subsequent $key....<br />        </span><span class="keyword">{<br />          if (!isset(</span><span class="default">$last</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">])) </span><span class="default">$last</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = Array();<br />        }<br /><br />        </span><span class="comment">// Bind $last to one dimension 'deeper'.<br />        // First lap: was &amp;$out, now &amp;$out[...]<br />        // Second lap: was &amp;$out[...], now &amp;$out[...][...]<br />        // Third lap:  was &amp;$out[...][...], now &amp;$out[...][...][...]<br />        // (etc.)<br />        </span><span class="default">$last </span><span class="keyword">=&amp; </span><span class="default">$last</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">];<br />      }<br />      <br />      if (isset(</span><span class="default">$last</span><span class="keyword">))<br />      {<br />        </span><span class="comment">// At this point, copy the $row into our output array<br />        </span><span class="keyword">if (</span><span class="default">$dupl</span><span class="keyword">) </span><span class="default">$last</span><span class="keyword">[</span><span class="default">$cx</span><span class="keyword">] = </span><span class="default">$row</span><span class="keyword">; </span><span class="comment">// Keep previous<br />        </span><span class="keyword">else       </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">; </span><span class="comment">// Overwrite previous<br />      </span><span class="keyword">}<br />      unset(</span><span class="default">$last</span><span class="keyword">); </span><span class="comment">// Break the reference<br />    </span><span class="keyword">}<br />    else return </span><span class="default">NULL</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Done<br />    </span><span class="keyword">return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// A sample result set to test the function with<br /></span><span class="default">$data </span><span class="keyword">= Array(Array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'row 1'</span><span class="keyword">, </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'foo_a'</span><span class="keyword">, </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'bar_a'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; </span><span class="string">'baz_a'</span><span class="keyword">),<br />              Array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'row 2'</span><span class="keyword">, </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'foo_a'</span><span class="keyword">, </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'bar_a'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; </span><span class="string">'baz_b'</span><span class="keyword">),<br />              Array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'row 3'</span><span class="keyword">, </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'foo_a'</span><span class="keyword">, </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'bar_b'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; </span><span class="string">'baz_c'</span><span class="keyword">),<br />              Array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'row 4'</span><span class="keyword">, </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'foo_b'</span><span class="keyword">, </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'bar_c'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; </span><span class="string">'baz_d'</span><span class="keyword">)<br />              ); <br /><br /></span><span class="comment">// First, let's key it by one column (result: two-dimensional array)<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_key_by</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'baz'</span><span class="keyword">));<br /><br /></span><span class="comment">// Or, key it by two columns (result: 3-dimensional array)<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_key_by</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, Array(</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">)));<br /><br /></span><span class="comment">// We could also key it by three columns (result: 4-dimensional array)<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_key_by</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, Array(</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">)));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.whatdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.whatdo.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.references.php">References Explained</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.references.whatare.php" title="What References Are">What References Are</a>
                        </li>
                                                <li class="current">
                            <a href="language.references.whatdo.php" title="What References Do">What References Do</a>
                        </li>
                                                <li class="">
                            <a href="language.references.arent.php" title="What References Are Not">What References Are Not</a>
                        </li>
                                                <li class="">
                            <a href="language.references.pass.php" title="Passing by Reference">Passing by Reference</a>
                        </li>
                                                <li class="">
                            <a href="language.references.return.php" title="Returning References">Returning References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.unset.php" title="Unsetting References">Unsetting References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.spot.php" title="Spotting References">Spotting References</a>
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
