<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration56.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration56.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration56.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration56.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration56.incompatible.php">
 <link rel="next" href="https://www.php.net/manual/en/migration56.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration56.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration56.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration56.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration56.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration56.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration56.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration56.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration56.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration56.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration56.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration56.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New features - Manual" />
<meta name="twitter:description" content="New features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New features - Manual" />
<meta itemprop="description" content="New features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New features" />

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
        <a href="migration56.deprecated.php">
          Deprecated features in PHP 5.6.x &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration56.incompatible.php">
          &laquo; Backward incompatible changes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration56.php'>Migrating from PHP 5.5.x to PHP 5.6.x</a></li>      </ul>
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
            <option value='en/migration56.new-features.php' selected="selected">English</option>
            <option value='de/migration56.new-features.php'>German</option>
            <option value='es/migration56.new-features.php'>Spanish</option>
            <option value='fr/migration56.new-features.php'>French</option>
            <option value='it/migration56.new-features.php'>Italian</option>
            <option value='ja/migration56.new-features.php'>Japanese</option>
            <option value='pt_BR/migration56.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration56.new-features.php'>Russian</option>
            <option value='tr/migration56.new-features.php'>Turkish</option>
            <option value='uk/migration56.new-features.php'>Ukrainian</option>
            <option value='zh/migration56.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration56.new-features" class="sect1">
 <h2 class="title">New features</h2>

 <div class="sect2" id="migration56.new-features.const-scalar-exprs">
  <h3 class="title">Constant expressions</h3>

  <p class="para">
   It is now possible to provide a scalar expression involving numeric and
   string literals and/or constants in contexts where PHP previously expected
   a static value, such as constant and property declarations and default
   function arguments.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">ONE </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />const </span><span style="color: #0000BB">TWO </span><span style="color: #007700">= </span><span style="color: #0000BB">ONE </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">THREE </span><span style="color: #007700">= </span><span style="color: #0000BB">TWO </span><span style="color: #007700">+ </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">ONE_THIRD </span><span style="color: #007700">= </span><span style="color: #0000BB">ONE </span><span style="color: #007700">/ </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THREE</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">SENTENCE </span><span style="color: #007700">= </span><span style="color: #DD0000">'The value of THREE is '</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THREE</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">ONE </span><span style="color: #007700">+ </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THREE</span><span style="color: #007700">) {<br />        return </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo (new </span><span style="color: #0000BB">C</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">f</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">C</span><span style="color: #007700">::</span><span style="color: #0000BB">SENTENCE</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
4
The value of THREE is 3
</pre></div>
   </div>
  </div>

  <p class="para">
   It is also now possible to define a constant <span class="type"><a href="language.types.array.php" class="type array">array</a></span> using the
   <code class="literal">const</code> keyword:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">ARR </span><span style="color: #007700">= [</span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">];<br /><br />echo </span><span style="color: #0000BB">ARR</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
a
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.variadics">
  <h3 class="title">Variadic functions via <code class="literal">...</code></h3>

  <p class="para">
   <a href="functions.arguments.php#functions.variable-arg-list" class="link">Variadic functions</a> can
   now be implemented using the <code class="literal">...</code> operator, instead of
   relying on <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">, </span><span style="color: #0000BB">$opt </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$params</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// $params is an array containing the remaining arguments.<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'$req: %d; $opt: %d; number of params: %d'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,<br />           </span><span style="color: #0000BB">$req</span><span style="color: #007700">, </span><span style="color: #0000BB">$opt</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
$req: 1; $opt: 0; number of params: 0
$req: 1; $opt: 2; number of params: 0
$req: 1; $opt: 2; number of params: 1
$req: 1; $opt: 2; number of params: 2
$req: 1; $opt: 2; number of params: 3
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.splat">
  <h3 class="title">Argument unpacking via <code class="literal">...</code></h3>

  <p class="para">
   <a href="language.types.array.php" class="link">Arrays</a> and
   <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> objects can be unpacked into
   argument lists when calling functions by using the <code class="literal">...</code>
   operator. This is also known as the splat operator in other languages,
   including Ruby.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b </span><span style="color: #007700">+ </span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$operators </span><span style="color: #007700">= [</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$operators</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
6
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.exponentiation">
  <h3 class="title">Exponentiation via <code class="literal">**</code></h3>

  <p class="para">
   A right associative <code class="literal">**</code> operator has been added to
   support exponentiation, along with a <code class="literal">**=</code> shorthand
   assignment operator.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"2 ** 3 ==      %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">** </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"2 ** 3 ** 2 == %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">** </span><span style="color: #0000BB">3 </span><span style="color: #007700">** </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">**= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"a ==           %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="cdata"><pre>
2 ** 3 ==      8
2 ** 3 ** 2 == 512
a ==           8
</pre></div>
  </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.use">
  <h3 class="title"><code class="literal">use function</code> and <code class="literal">use const</code></h3>

  <p class="para">
   The
   <a href="language.namespaces.importing.php" class="link"><code class="literal">use</code></a> 
   operator has been extended to support importing functions and constants in
   addition to classes. This is achieved via the
   <code class="literal">use function</code> and <code class="literal">use const</code>
   constructs, respectively.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Name\Space </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">FOO </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />    function </span><span style="color: #0000BB">f</span><span style="color: #007700">() { echo </span><span style="color: #0000BB">__FUNCTION__</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; }<br />}<br /><br />namespace {<br />    use const </span><span style="color: #0000BB">Name\Space\FOO</span><span style="color: #007700">;<br />    use function </span><span style="color: #0000BB">Name\Space\f</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #0000BB">FOO</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">f</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
42
Name\Space\f
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.phpdbg">
  <h3 class="title">phpdbg</h3>

  <p class="para">
   PHP now includes an interactive debugger called phpdbg implemented as a
   SAPI module. For more information, please visit the
   <a href="book.phpdbg.php" class="link">phpdbg documentation</a>.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.default-encoding">
  <h3 class="title">Default character encoding</h3>

  <p class="para">
   <a href="ini.core.php#ini.default-charset" class="link">default_charset</a> is now used as
   the default character set for the <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>,
   <span class="function"><a href="function.html-entity-decode.php" class="function">html_entity_decode()</a></span> and
   <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> functions. Note that if the (now
   deprecated) iconv and mbstring encoding settings are set, they will take
   precedence over default_charset for iconv and mbstring functions,
   respectively.
  </p>

  <p class="para">
   The default value for this setting is <code class="literal">UTF-8</code>.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.reusable-input">
  <h3 class="title"><a href="wrappers.php.php#wrappers.php.input" class="link"><code class="literal">php://input</code></a> is reusable</h3>

  <p class="para">
   <a href="wrappers.php.php#wrappers.php.input" class="link"><code class="literal">php://input</code></a>
   may now be reopened and read as many times as required. This work has also
   resulted in a major reduction in the amount of memory required to deal
   with POST data.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.large-file">
  <h3 class="title">Large file uploads</h3>

  <p class="para">
   Files larger than 2 gigabytes in size are now accepted.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.gmp">
  <h3 class="title"><a href="book.gmp.php" class="link">GMP</a> supports operator overloading</h3>

  <p class="para">
   <a href="book.gmp.php" class="link">GMP</a> objects now support operator
   overloading and casting to scalar types. This allows for more expressive
   code using GMP:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_init</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_init</span><span style="color: #007700">(</span><span style="color: #0000BB">17</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_VERSION</span><span style="color: #007700">, </span><span style="color: #DD0000">'5.6'</span><span style="color: #007700">, </span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">gmp_intval</span><span style="color: #007700">(</span><span style="color: #0000BB">gmp_add</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">gmp_intval</span><span style="color: #007700">(</span><span style="color: #0000BB">gmp_add</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">17</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">gmp_intval</span><span style="color: #007700">(</span><span style="color: #0000BB">gmp_add</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">17</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">42 </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
59
59
59
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.hash-equals">
  <h3 class="title"><span class="function"><a href="function.hash-equals.php" class="function">hash_equals()</a></span> for timing attack safe string comparison</h3>

  <p class="para">
   The <span class="function"><a href="function.hash-equals.php" class="function">hash_equals()</a></span> function has been added to compare
   two strings in constant time. This should be used to mitigate timing
   attacks; for instance, when testing <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> password
   hashes (assuming that you are unable to use
   <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> and
   <span class="function"><a href="function.password-verify.php" class="function">password_verify()</a></span>, which aren&#039;t susceptible to timing
   attacks).
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$expected  </span><span style="color: #007700">= </span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #DD0000">'12345'</span><span style="color: #007700">, </span><span style="color: #DD0000">'$2a$07$usesomesillystringforsalt$'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$correct   </span><span style="color: #007700">= </span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #DD0000">'12345'</span><span style="color: #007700">, </span><span style="color: #DD0000">'$2a$07$usesomesillystringforsalt$'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$incorrect </span><span style="color: #007700">= </span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #DD0000">'1234'</span><span style="color: #007700">,  </span><span style="color: #DD0000">'$2a$07$usesomesillystringforsalt$'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">hash_equals</span><span style="color: #007700">(</span><span style="color: #0000BB">$expected</span><span style="color: #007700">, </span><span style="color: #0000BB">$correct</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">hash_equals</span><span style="color: #007700">(</span><span style="color: #0000BB">$expected</span><span style="color: #007700">, </span><span style="color: #0000BB">$incorrect</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
bool(true)
bool(false)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.debuginfo">
  <h3 class="title"><code class="literal">__debugInfo()</code></h3>

  <p class="para">
   The <a href="language.oop5.magic.php#language.oop5.magic.debuginfo" class="link">__debugInfo()</a>
   magic method has been added to allow objects to change the properties and
   values that are shown when the object is output using
   <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">= </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">__debugInfo</span><span style="color: #007700">() {<br />        return [<br />            </span><span style="color: #DD0000">'propSquared' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop </span><span style="color: #007700">** </span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />        ];<br />    }<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
object(C)#1 (1) {
  [&quot;propSquared&quot;]=&gt;
  int(1764)
}
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.new-features.gost">
  <h3 class="title">gost-crypto hash algorithm</h3>

  <p class="para">
   The <code class="literal">gost-crypto</code> hash algorithm has been added. This
   implements the GOST hash function using the CryptoPro S-box tables as
   specified by
   <a href="https://datatracker.ietf.org/doc/html/rfc4357" class="link external">&raquo;&nbsp;RFC 4357, section 11.2</a>.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.openssl">
  <h3 class="title">SSL/TLS improvements</h3>

  <p class="para">
   A wide range of improvements have been made to the SSL/TLS support in PHP
   5.6. These include
   <a href="migration56.incompatible.php#migration56.incompatible.peer-verification" class="link">enabling peer verification by default</a>,
   supporting certificate fingerprint matching, mitigating against TLS
   renegotiation attacks, and many new
   <a href="context.ssl.php" class="link">SSL context options</a> to allow more fine
   grained control over protocol and verification settings when using
   encrypted streams.
  </p>

  <p class="para">
   These changes are described in more detail in the
   <a href="migration56.openssl.php" class="link">OpenSSL changes in PHP 5.6.x</a>
   section of this migration guide.
  </p>
 </div>

 <div class="sect2" id="migration56.new-features.postgresql">
  <h3 class="title"><a href="book.pgsql.php" class="link">pgsql</a> async support</h3>

  <p class="para">
   The <a href="book.pgsql.php" class="link">pgsql</a> extension now supports
   asynchronous connections and queries, thereby enabling non-blocking
   behaviour when interacting with PostgreSQL databases. Asynchronous
   connections may be established via the
   <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-async">PGSQL_CONNECT_ASYNC</a></code></strong> constant, and the new
   <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span>, <span class="function"><a href="function.pg-socket.php" class="function">pg_socket()</a></span>,
   <span class="function"><a href="function.pg-consume-input.php" class="function">pg_consume_input()</a></span> and <span class="function"><a href="function.pg-flush.php" class="function">pg_flush()</a></span>
   functions may be used to handle asynchronous connections and queries.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration56/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration56.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration56.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration56.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration56.php">Migrating from PHP 5.5.x to PHP 5.6.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration56.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="current">
                            <a href="migration56.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration56.deprecated.php" title="Deprecated features in PHP 5.6.x">Deprecated features in PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.changed-functions.php" title="Changed functions">Changed functions</a>
                        </li>
                                                <li class="">
                            <a href="migration56.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration56.openssl.php" title="OpenSSL changes in PHP 5.6.x">OpenSSL changes in PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.extensions.php" title="Other changes to extensions">Other changes to extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration56.constants.php" title="New global constants">New global constants</a>
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
