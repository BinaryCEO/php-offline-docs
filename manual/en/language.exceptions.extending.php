<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Extending Exceptions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.exceptions.extending.php">
 <link rel="shorturl" href="https://www.php.net/exceptions.extending">
 <link rel="alternate" href="https://www.php.net/exceptions.extending" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.exceptions.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.exceptions.php">
 <link rel="next" href="https://www.php.net/manual/en/language.fibers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.exceptions.extending.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.exceptions.extending.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.exceptions.extending.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.exceptions.extending.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.exceptions.extending.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.exceptions.extending.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.exceptions.extending.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.exceptions.extending.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.exceptions.extending.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.exceptions.extending.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.exceptions.extending.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Extending Exceptions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Extending Exceptions - Manual" />
<meta name="twitter:description" content="Extending Exceptions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Extending Exceptions - Manual" />
<meta itemprop="description" content="Extending Exceptions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Extending Exceptions" />

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
        <a href="language.fibers.php">
          Fibers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.exceptions.php">
          &laquo; Exceptions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.exceptions.php'>Exceptions</a></li>      </ul>
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
            <option value='en/language.exceptions.extending.php' selected="selected">English</option>
            <option value='de/language.exceptions.extending.php'>German</option>
            <option value='es/language.exceptions.extending.php'>Spanish</option>
            <option value='fr/language.exceptions.extending.php'>French</option>
            <option value='it/language.exceptions.extending.php'>Italian</option>
            <option value='ja/language.exceptions.extending.php'>Japanese</option>
            <option value='pt_BR/language.exceptions.extending.php'>Brazilian Portuguese</option>
            <option value='ru/language.exceptions.extending.php'>Russian</option>
            <option value='tr/language.exceptions.extending.php'>Turkish</option>
            <option value='uk/language.exceptions.extending.php'>Ukrainian</option>
            <option value='zh/language.exceptions.extending.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.exceptions.extending" class="sect1">
  <h2 class="title">Extending Exceptions</h2>
  <p class="para">
   A User defined Exception class can be defined by extending the built-in
   Exception class. The members and properties below, show what is accessible
   within the child class that derives from the built-in Exception class.
  </p>
  <div class="example" id="example-419">
   <p><strong>Example #1 The Built in Exception class</strong></p>
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Exception </span><span style="color: #007700">implements </span><span style="color: #0000BB">Throwable<br /></span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'Unknown exception'</span><span style="color: #007700">;   </span><span style="color: #FF8000">// exception message<br />    </span><span style="color: #007700">private   </span><span style="color: #0000BB">$string</span><span style="color: #007700">;                          </span><span style="color: #FF8000">// __toString cache<br />    </span><span style="color: #007700">protected </span><span style="color: #0000BB">$code </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;                        </span><span style="color: #FF8000">// user defined exception code<br />    </span><span style="color: #007700">protected </span><span style="color: #0000BB">$file</span><span style="color: #007700">;                            </span><span style="color: #FF8000">// source filename of exception<br />    </span><span style="color: #007700">protected </span><span style="color: #0000BB">$line</span><span style="color: #007700">;                            </span><span style="color: #FF8000">// source line of exception<br />    </span><span style="color: #007700">private   </span><span style="color: #0000BB">$trace</span><span style="color: #007700">;                           </span><span style="color: #FF8000">// backtrace<br />    </span><span style="color: #007700">private   </span><span style="color: #0000BB">$previous</span><span style="color: #007700">;                        </span><span style="color: #FF8000">// previous exception if nested exception<br /><br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">$code </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">, ?</span><span style="color: #0000BB">Throwable $previous </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /><br />    final private function </span><span style="color: #0000BB">__clone</span><span style="color: #007700">();           </span><span style="color: #FF8000">// Inhibits cloning of exceptions.<br /><br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();        </span><span style="color: #FF8000">// message of exception<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getCode</span><span style="color: #007700">();           </span><span style="color: #FF8000">// code of exception<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getFile</span><span style="color: #007700">();           </span><span style="color: #FF8000">// source filename<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getLine</span><span style="color: #007700">();           </span><span style="color: #FF8000">// source line<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getTrace</span><span style="color: #007700">();          </span><span style="color: #FF8000">// an array of the backtrace()<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">();       </span><span style="color: #FF8000">// previous exception<br />    </span><span style="color: #007700">final public  function </span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">();  </span><span style="color: #FF8000">// formatted string of trace<br /><br />    // Overrideable<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">();               </span><span style="color: #FF8000">// formatted string for display<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="para">
   If a class extends the built-in Exception class and re-defines the <a href="language.oop5.decon.php" class="link">constructor</a>, it is highly recommended
   that it also call <a href="language.oop5.paamayim-nekudotayim.php" class="link">parent::__construct()</a>
   to ensure all available data has been properly assigned. The <a href="language.oop5.magic.php" class="link">__toString()</a> method can be overridden
   to provide a custom output when the object is presented as a string.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Exceptions cannot be cloned. Attempting to <a href="language.oop5.cloning.php" class="link">clone</a> an Exception will result in a
    fatal <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> error.
   </p>
  </p></blockquote>
  <div class="example" id="example-420">
   <p><strong>Example #2 Extending the Exception class</strong></p>
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br /> * Define a custom exception class<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyException </span><span style="color: #007700">extends </span><span style="color: #0000BB">Exception<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Redefine the exception so message isn't optional<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$code </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">, ?</span><span style="color: #0000BB">Throwable $previous </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {<br />        </span><span style="color: #FF8000">// some code<br /><br />        // make sure everything is assigned properly<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$code</span><span style="color: #007700">, </span><span style="color: #0000BB">$previous</span><span style="color: #007700">);<br />    }<br /><br />    </span><span style="color: #FF8000">// custom string representation of object<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">": [</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">}</span><span style="color: #DD0000">]: </span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">customFunction</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"A custom function for this type of exception\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /><br /></span><span style="color: #FF8000">/**<br /> * Create a class to test the exception<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">TestException<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var</span><span style="color: #007700">;<br /><br />    const </span><span style="color: #0000BB">THROW_NONE    </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">THROW_CUSTOM  </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">THROW_DEFAULT </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$avalue </span><span style="color: #007700">= </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_NONE</span><span style="color: #007700">) {<br /><br />        switch (</span><span style="color: #0000BB">$avalue</span><span style="color: #007700">) {<br />            case </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_CUSTOM</span><span style="color: #007700">:<br />                </span><span style="color: #FF8000">// throw custom exception<br />                </span><span style="color: #007700">throw new </span><span style="color: #0000BB">MyException</span><span style="color: #007700">(</span><span style="color: #DD0000">'1 is an invalid parameter'</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br />                break;<br /><br />            case </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_DEFAULT</span><span style="color: #007700">:<br />                </span><span style="color: #FF8000">// throw default one.<br />                </span><span style="color: #007700">throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'2 is not allowed as a parameter'</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />                break;<br /><br />            default:<br />                </span><span style="color: #FF8000">// No exception, object will be created.<br />                </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var </span><span style="color: #007700">= </span><span style="color: #0000BB">$avalue</span><span style="color: #007700">;<br />                break;<br />        }<br />    }<br />}<br /><br /><br /></span><span style="color: #FF8000">// Example 1<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestException</span><span style="color: #007700">(</span><span style="color: #0000BB">TestException</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_CUSTOM</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">MyException $e</span><span style="color: #007700">) {      </span><span style="color: #FF8000">// Will be caught<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Caught my exception\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFunction</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {        </span><span style="color: #FF8000">// Skipped<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Caught Default Exception\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">); </span><span style="color: #FF8000">// Null<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">// Example 2<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestException</span><span style="color: #007700">(</span><span style="color: #0000BB">TestException</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_DEFAULT</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">MyException $e</span><span style="color: #007700">) {      </span><span style="color: #FF8000">// Doesn't match this type<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Caught my exception\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFunction</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {        </span><span style="color: #FF8000">// Will be caught<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Caught Default Exception\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">); </span><span style="color: #FF8000">// Null<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">// Example 3<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestException</span><span style="color: #007700">(</span><span style="color: #0000BB">TestException</span><span style="color: #007700">::</span><span style="color: #0000BB">THROW_CUSTOM</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {        </span><span style="color: #FF8000">// Will be caught<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Default Exception caught\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">); </span><span style="color: #FF8000">// Null<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #FF8000">// Example 4<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestException</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {        </span><span style="color: #FF8000">// Skipped, no exception<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Default Exception caught\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">); </span><span style="color: #FF8000">// TestException<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/exceptions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.exceptions.extending%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.exceptions.extending&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.exceptions.extending.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95403">  <div class="votes">
    <div id="Vu95403">
    <a href="/manual/vote-note.php?id=95403&amp;page=language.exceptions.extending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95403">
    <a href="/manual/vote-note.php?id=95403&amp;page=language.exceptions.extending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95403" title="66% like this...">
    16
    </div>
  </div>
  <a href="#95403" class="name">
  <strong class="user"><em>iamhiddensomewhere at gmail dot com</em></strong></a><a class="genanchor" href="#95403"> &para;</a><div class="date" title="2009-12-31 03:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95403">
<div class="phpcode"><code><span class="html">As previously noted exception linking was recently added (and what a god-send it is, it certainly makes layer abstraction (and, by association, exception tracking) easier).<br /><br />Since &lt;5.3 was lacking this useful feature I took some initiative and creating a custom exception class that all of my exceptions inherit from:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">SystemException </span><span class="keyword">extends </span><span class="default">Exception<br /></span><span class="keyword">{<br />    private </span><span class="default">$previous</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">Exception $previous </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br />        <br />        if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$previous</span><span class="keyword">))<br />        {<br />            </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">previous </span><span class="keyword">= </span><span class="default">$previous</span><span class="keyword">;<br />        }<br />    }<br />    <br />    public function </span><span class="default">getPrevious</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">previous</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope you find it useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="123638">  <div class="votes">
    <div id="Vu123638">
    <a href="/manual/vote-note.php?id=123638&amp;page=language.exceptions.extending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123638">
    <a href="/manual/vote-note.php?id=123638&amp;page=language.exceptions.extending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123638" title="81% like this...">
    7
    </div>
  </div>
  <a href="#123638" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#123638"> &para;</a><div class="date" title="2019-02-25 04:13"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123638">
<div class="phpcode"><code><span class="html">Check the other SPL Exception classes and extend one of those if your intended exception is a subclass of one of those. This allows more finesse when catching.</span></code></div>
  </div>
 </div>
  <div class="note" id="110356">  <div class="votes">
    <div id="Vu110356">
    <a href="/manual/vote-note.php?id=110356&amp;page=language.exceptions.extending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110356">
    <a href="/manual/vote-note.php?id=110356&amp;page=language.exceptions.extending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110356" title="60% like this...">
    5
    </div>
  </div>
  <a href="#110356" class="name">
  <strong class="user"><em>michaelrfairhurst at gmail dot com</em></strong></a><a class="genanchor" href="#110356"> &para;</a><div class="date" title="2012-10-15 04:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110356">
<div class="phpcode"><code><span class="html">Custom exception classes can allow you to write tests that prove your exceptions<br />are meaningful. Usually testing exceptions, you either assert the message equals<br />something in which case you can't change the message format without refactoring,<br />or not make any assertions at all in which case you can get misleading messages<br />later down the line. Especially if your $e-&gt;getMessage is something complicated<br />like a var_dump'ed context array.<br /><br />The solution is to abstract the error information from the Exception class into<br />properties that can be tested everywhere except the one test for your formatting.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TestableException </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{<br /><br />        private </span><span class="default">$property</span><span class="keyword">;<br /><br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">) {<br /><br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">property </span><span class="keyword">= </span><span class="default">$property</span><span class="keyword">;<br />                </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">));<br /><br />        }<br /><br />        function </span><span class="default">format</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">) {<br />                return </span><span class="string">"I have formatted: " </span><span class="keyword">. </span><span class="default">$property </span><span class="keyword">. </span><span class="string">"!!"</span><span class="keyword">;<br />        }<br /><br />        function </span><span class="default">getProperty</span><span class="keyword">() {<br />                return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">property</span><span class="keyword">;<br />        }<br /><br />}<br /><br />function </span><span class="default">testSomethingThrowsTestableException</span><span class="keyword">() {<br />        try {<br />                throw new </span><span class="default">TestableException</span><span class="keyword">(</span><span class="string">'Property'</span><span class="keyword">);<br />        } Catch (</span><span class="default">TestableException $e</span><span class="keyword">) {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertEquals</span><span class="keyword">(</span><span class="string">'Property'</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getProperty</span><span class="keyword">());<br />        }<br />}<br /><br />function </span><span class="default">testExceptionFormattingOnlyOnce</span><span class="keyword">() {<br />        </span><span class="default">$e </span><span class="keyword">= new </span><span class="default">TestableException</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertEquals</span><span class="keyword">(</span><span class="string">'I have formatted: properly for the only required test!!'</span><span class="keyword">,<br />                </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'properly for the only required test'</span><span class="keyword">)<br />        );<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94780">  <div class="votes">
    <div id="Vu94780">
    <a href="/manual/vote-note.php?id=94780&amp;page=language.exceptions.extending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94780">
    <a href="/manual/vote-note.php?id=94780&amp;page=language.exceptions.extending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94780" title="60% like this...">
    4
    </div>
  </div>
  <a href="#94780" class="name">
  <strong class="user"><em>sapphirepaw.org</em></strong></a><a class="genanchor" href="#94780"> &para;</a><div class="date" title="2009-11-24 07:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94780">
<div class="phpcode"><code><span class="html">Support for exception linking was added in PHP 5.3.0. The getPrevious() method and the $previous argument to the constructor are not available on any built-in exceptions in older versions of PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="106168">  <div class="votes">
    <div id="Vu106168">
    <a href="/manual/vote-note.php?id=106168&amp;page=language.exceptions.extending&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106168">
    <a href="/manual/vote-note.php?id=106168&amp;page=language.exceptions.extending&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106168" title="52% like this...">
    1
    </div>
  </div>
  <a href="#106168" class="name">
  <strong class="user"><em>Dor</em></strong></a><a class="genanchor" href="#106168"> &para;</a><div class="date" title="2011-10-15 02:30"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106168">
<div class="phpcode"><code><span class="html">It's important to note that subclasses of the Exception class will be caught by the default Exception handler<br /><br /><span class="default">&lt;?php<br />    <br />    </span><span class="comment">/**<br />     * NewException<br />     * Extends the Exception class so that the $message parameter is now mendatory.<br />     * <br />     */<br />    </span><span class="keyword">class </span><span class="default">NewException </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{<br />        </span><span class="comment">//$message is now not optional, just for the extension.<br />        </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">Exception $previous </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />            </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">, </span><span class="default">$previous</span><span class="keyword">);<br />        }<br />    }<br />    <br />    </span><span class="comment">/**<br />     * TestException<br />     * Tests and throws Exceptions.<br />     */<br />    </span><span class="keyword">class </span><span class="default">TestException </span><span class="keyword">{<br />        const </span><span class="default">NONE </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        const </span><span class="default">NORMAL </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        const </span><span class="default">CUSTOM </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$type </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">NONE</span><span class="keyword">) {<br />            switch (</span><span class="default">$type</span><span class="keyword">) {<br />                case </span><span class="default">1</span><span class="keyword">: <br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Normal Exception'</span><span class="keyword">);<br />                    break;<br />                case </span><span class="default">2</span><span class="keyword">:<br />                    throw new </span><span class="default">NewException</span><span class="keyword">(</span><span class="string">'Custom Exception'</span><span class="keyword">);<br />                    break;<br />                default:<br />                    return </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//No exception is thrown.<br />            </span><span class="keyword">}<br />        }<br />    }<br />    <br />    try {<br />        </span><span class="default">$t </span><span class="keyword">= new </span><span class="default">TestException</span><span class="keyword">(</span><span class="default">TestException</span><span class="keyword">::</span><span class="default">CUSTOM</span><span class="keyword">);<br />    }<br />    catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">); </span><span class="comment">//Exception Caught<br />    </span><span class="keyword">}<br />    <br /></span><span class="default">?&gt;<br /></span><br />Note that if an Exception is caught once, it won't be caught again (even for a more specific handler).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.exceptions.extending&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.exceptions.extending.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.exceptions.php">Exceptions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.exceptions.extending.php" title="Extending Exceptions">Extending Exceptions</a>
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
