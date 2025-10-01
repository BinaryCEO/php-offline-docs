<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Enumeration methods - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.enumerations.methods.php">
 <link rel="shorturl" href="https://www.php.net/enumerations.methods">
 <link rel="alternate" href="https://www.php.net/enumerations.methods" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.enumerations.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.enumerations.backed.php">
 <link rel="next" href="https://www.php.net/manual/en/language.enumerations.static-methods.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.enumerations.methods.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.enumerations.methods.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.enumerations.methods.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.enumerations.methods.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.enumerations.methods.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.enumerations.methods.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.enumerations.methods.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.enumerations.methods.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.enumerations.methods.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.enumerations.methods.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.enumerations.methods.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Enumeration methods" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Enumeration methods - Manual" />
<meta name="twitter:description" content="Enumeration methods" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Enumeration methods - Manual" />
<meta itemprop="description" content="Enumeration methods" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Enumeration methods" />

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
        <a href="language.enumerations.static-methods.php">
          Enumeration static methods &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.enumerations.backed.php">
          &laquo; Backed enumerations        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.enumerations.php'>Enumerations</a></li>      </ul>
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
            <option value='en/language.enumerations.methods.php' selected="selected">English</option>
            <option value='de/language.enumerations.methods.php'>German</option>
            <option value='es/language.enumerations.methods.php'>Spanish</option>
            <option value='fr/language.enumerations.methods.php'>French</option>
            <option value='it/language.enumerations.methods.php'>Italian</option>
            <option value='ja/language.enumerations.methods.php'>Japanese</option>
            <option value='pt_BR/language.enumerations.methods.php'>Brazilian Portuguese</option>
            <option value='ru/language.enumerations.methods.php'>Russian</option>
            <option value='tr/language.enumerations.methods.php'>Turkish</option>
            <option value='uk/language.enumerations.methods.php'>Ukrainian</option>
            <option value='zh/language.enumerations.methods.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.enumerations.methods" class="sect1">
  <h2 class="title">Enumeration methods</h2>

  <p class="para">
   Enums (both Pure Enums and Backed Enums) may contain methods, and may implement interfaces.
   If an Enum implements an interface, then any type check for that interface will also accept
   all cases of that Enum.
  </p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string</span><span style="color: #007700">;<br />}<br /><br />enum </span><span style="color: #0000BB">Suit </span><span style="color: #007700">implements </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    case </span><span style="color: #0000BB">Hearts</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Diamonds</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Clubs</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Spades</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Fulfills the interface contract.<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return match(</span><span style="color: #0000BB">$this</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Hearts</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Red'</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Spades </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Black'</span><span style="color: #007700">,<br />        };<br />    }<br /><br />    </span><span style="color: #FF8000">// Not part of an interface; that's fine.<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">shape</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #DD0000">"Rectangle"</span><span style="color: #007700">;<br />    }<br />}<br /><br />function </span><span style="color: #0000BB">paint</span><span style="color: #007700">(</span><span style="color: #0000BB">Colorful $c</span><span style="color: #007700">)<br />{<br />   </span><span style="color: #FF8000">/* ... */<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">paint</span><span style="color: #007700">(</span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">);  </span><span style="color: #FF8000">// Works<br /><br /></span><span style="color: #007700">print </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Diamonds</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">shape</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints "Rectangle"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   In this example, all four instances of <code class="literal">Suit</code> have two methods,
   <code class="literal">color()</code> and <code class="literal">shape()</code>. As far as calling code
   and type checks are concerned, they behave exactly the same as any other object instance.
  </p>

  <p class="para">
   On a Backed Enum, the interface declaration goes after the backing type declaration.
  </p>

  <div class="example-contents">
   <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string</span><span style="color: #007700">;<br />}<br /><br />enum </span><span style="color: #0000BB">Suit</span><span style="color: #007700">: </span><span style="color: #0000BB">string </span><span style="color: #007700">implements </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    case </span><span style="color: #0000BB">Hearts </span><span style="color: #007700">= </span><span style="color: #DD0000">'H'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">= </span><span style="color: #DD0000">'D'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Clubs </span><span style="color: #007700">= </span><span style="color: #DD0000">'C'</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Spades </span><span style="color: #007700">= </span><span style="color: #DD0000">'S'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Fulfills the interface contract.<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return match(</span><span style="color: #0000BB">$this</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Hearts</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Red'</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Spades </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Black'</span><span style="color: #007700">,<br />        };<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   Inside a method, the <code class="literal">$this</code> variable is defined and refers to the Case instance.
  </p>

  <p class="para">
   Methods may be arbitrarily complex, but in practice will usually return a static value or
   <a href="control-structures.match.php" class="link">match</a> on <code class="literal">$this</code> to provide
   different results for different cases.
  </p>

  <p class="para">
   Note that in this case it would be a better data modeling practice to also define a
   <code class="literal">SuitColor</code> Enum Type with values Red and Black and return that instead.
   However, that would complicate this example.
  </p>

  <p class="para">
   The above hierarchy is logically similar to the following class structure
   (although this is not the actual code that runs):
  </p>

  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string</span><span style="color: #007700">;<br />}<br /><br />final class </span><span style="color: #0000BB">Suit </span><span style="color: #007700">implements </span><span style="color: #0000BB">UnitEnum</span><span style="color: #007700">, </span><span style="color: #0000BB">Colorful<br /></span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">Hearts </span><span style="color: #007700">= new </span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #DD0000">'Hearts'</span><span style="color: #007700">);<br />    public const </span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">= new </span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #DD0000">'Diamonds'</span><span style="color: #007700">);<br />    public const </span><span style="color: #0000BB">Clubs </span><span style="color: #007700">= new </span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #DD0000">'Clubs'</span><span style="color: #007700">);<br />    public const </span><span style="color: #0000BB">Spades </span><span style="color: #007700">= new </span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #DD0000">'Spades'</span><span style="color: #007700">);<br /><br />    private function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(public readonly </span><span style="color: #0000BB">string $name</span><span style="color: #007700">) {}<br /><br />    public function </span><span style="color: #0000BB">color</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return match(</span><span style="color: #0000BB">$this</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Hearts</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Diamonds </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Red'</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Clubs</span><span style="color: #007700">, </span><span style="color: #0000BB">Suit</span><span style="color: #007700">::</span><span style="color: #0000BB">Spades </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Black'</span><span style="color: #007700">,<br />        };<br />    }<br /><br />    public function </span><span style="color: #0000BB">shape</span><span style="color: #007700">(): </span><span style="color: #0000BB">string<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #DD0000">"Rectangle"</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">cases</span><span style="color: #007700">(): array<br />    {<br />        </span><span style="color: #FF8000">// Illegal method, because manually defining a cases() method on an Enum is disallowed.<br />        // See also "Value listing" section.<br />    </span><span style="color: #007700">}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>


  <p class="para">
   Methods may be public, private, or protected, although in practice private and
   protected are equivalent as inheritance is not allowed.
  </p>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/enumerations.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.enumerations.methods%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.enumerations.methods&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.enumerations.methods.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128783">  <div class="votes">
    <div id="Vu128783">
    <a href="/manual/vote-note.php?id=128783&amp;page=language.enumerations.methods&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128783">
    <a href="/manual/vote-note.php?id=128783&amp;page=language.enumerations.methods&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128783" title="86% like this...">
    17
    </div>
  </div>
  <a href="#128783" class="name">
  <strong class="user"><em>iloveyii at yahoo dot com</em></strong></a><a class="genanchor" href="#128783"> &para;</a><div class="date" title="2023-08-06 06:57"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128783">
<div class="phpcode"><code><span class="html">Just to complete the function shape in the above neat example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Colorful<br /></span><span class="keyword">{<br />    public function </span><span class="default">color</span><span class="keyword">(): </span><span class="default">string</span><span class="keyword">;<br />}<br /><br />enum </span><span class="default">Suit </span><span class="keyword">implements </span><span class="default">Colorful<br /></span><span class="keyword">{<br />    case </span><span class="default">Hearts</span><span class="keyword">;<br />    case </span><span class="default">Diamonds</span><span class="keyword">;<br />    case </span><span class="default">Clubs</span><span class="keyword">;<br />    case </span><span class="default">Spades</span><span class="keyword">;<br /><br />    </span><span class="comment">// Fulfills the interface contract.<br />    </span><span class="keyword">public function </span><span class="default">color</span><span class="keyword">(): </span><span class="default">string<br />    </span><span class="keyword">{<br />        return match(</span><span class="default">$this</span><span class="keyword">) {<br />            </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Hearts</span><span class="keyword">, </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Diamonds </span><span class="keyword">=&gt; </span><span class="string">'Red'</span><span class="keyword">,<br />            </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Clubs</span><span class="keyword">, </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Spades </span><span class="keyword">=&gt; </span><span class="string">'Black'</span><span class="keyword">,<br />        };<br />    }<br /><br />    </span><span class="comment">// Not part of an interface; that's fine.<br />    </span><span class="keyword">public function </span><span class="default">shape</span><span class="keyword">(): </span><span class="default">string<br />    </span><span class="keyword">{<br />           return match(</span><span class="default">$this</span><span class="keyword">) {<br />               </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Hearts </span><span class="keyword">=&gt; </span><span class="string">'❤️'</span><span class="keyword">, <br />               </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Diamonds </span><span class="keyword">=&gt; </span><span class="string">'💎'</span><span class="keyword">, <br />               </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Clubs </span><span class="keyword">=&gt; </span><span class="string">'♣️'</span><span class="keyword">, <br />               </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Spades </span><span class="keyword">=&gt; </span><span class="string">' ♠️'<br />           </span><span class="keyword">};<br />       <br />    }<br />}<br /><br />echo </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Diamonds</span><span class="keyword">-&gt;</span><span class="default">shape</span><span class="keyword">();<br />echo </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="default">Suit</span><span class="keyword">::</span><span class="default">Clubs</span><span class="keyword">-&gt;</span><span class="default">shape</span><span class="keyword">();</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.enumerations.methods&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.enumerations.methods.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.enumerations.php">Enumerations</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.enumerations.overview.php" title="Enumerations overview">Enumerations overview</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.basics.php" title="Basic enumerations">Basic enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.backed.php" title="Backed enumerations">Backed enumerations</a>
                        </li>
                                                <li class="current">
                            <a href="language.enumerations.methods.php" title="Enumeration methods">Enumeration methods</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.static-methods.php" title="Enumeration static methods">Enumeration static methods</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.constants.php" title="Enumeration constants">Enumeration constants</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.expressions.php" title="Enum values in constant expressions">Enum values in constant expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.object-differences.php" title="Differences from objects">Differences from objects</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.listing.php" title="Value listing">Value listing</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.serialization.php" title="Serialization">Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.object-differences.inheritance.php" title="Why enums aren't extendable">Why enums aren't extendable</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.examples.php" title="Examples">Examples</a>
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
