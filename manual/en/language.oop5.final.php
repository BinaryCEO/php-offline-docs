<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Final Keyword - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.final.php">
 <link rel="shorturl" href="https://www.php.net/oop5.final">
 <link rel="alternate" href="https://www.php.net/oop5.final" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.magic.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.cloning.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.final.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.final.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.final.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.final.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.final.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.final.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.final.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.final.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.final.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.final.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.final.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Final Keyword" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Final Keyword - Manual" />
<meta name="twitter:description" content="Final Keyword" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Final Keyword - Manual" />
<meta itemprop="description" content="Final Keyword" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Final Keyword" />

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
        <a href="language.oop5.cloning.php">
          Object Cloning &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.magic.php">
          &laquo; Magic Methods        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.final.php' selected="selected">English</option>
            <option value='de/language.oop5.final.php'>German</option>
            <option value='es/language.oop5.final.php'>Spanish</option>
            <option value='fr/language.oop5.final.php'>French</option>
            <option value='it/language.oop5.final.php'>Italian</option>
            <option value='ja/language.oop5.final.php'>Japanese</option>
            <option value='pt_BR/language.oop5.final.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.final.php'>Russian</option>
            <option value='tr/language.oop5.final.php'>Turkish</option>
            <option value='uk/language.oop5.final.php'>Ukrainian</option>
            <option value='zh/language.oop5.final.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.final" class="sect1">
 <h2 class="title">Final Keyword</h2>
 <p class="para">
  The final keyword prevents child classes from overriding a method, property, or constant by
  prefixing the definition with <code class="literal">final</code>. If the class
  itself is being defined final then it cannot be extended.
 </p>
 <p class="para">
  <div class="example" id="example-356">
   <p><strong>Example #1 Final methods example</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />   public function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"BaseClass::test() called\n"</span><span style="color: #007700">;<br />   }<br />   <br />   final public function </span><span style="color: #0000BB">moreTesting</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"BaseClass::moreTesting() called\n"</span><span style="color: #007700">;<br />   }<br />}<br /><br />class </span><span style="color: #0000BB">ChildClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />   public function </span><span style="color: #0000BB">moreTesting</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"ChildClass::moreTesting() called\n"</span><span style="color: #007700">;<br />   }<br />}<br /></span><span style="color: #FF8000">// Results in Fatal error: Cannot override final method BaseClass::moreTesting()<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-357">
   <p><strong>Example #2 Final class example</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">final class </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />   public function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"BaseClass::test() called\n"</span><span style="color: #007700">;<br />   }<br /><br />   </span><span style="color: #FF8000">// As the class is already final, the final keyword is redundant<br />   </span><span style="color: #007700">final public function </span><span style="color: #0000BB">moreTesting</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"BaseClass::moreTesting() called\n"</span><span style="color: #007700">;<br />   }<br />}<br /><br />class </span><span style="color: #0000BB">ChildClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />}<br /></span><span style="color: #FF8000">// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <div class="example" id="example-358">
  <p><strong>Example #3 Final property example as of PHP 8.4.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />   final protected </span><span style="color: #0000BB">string $test</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">ChildClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">BaseClass </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $test</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// Results in Fatal error: Cannot override final property BaseClass::$test<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="language.oop5.final.example.php81">
  <p><strong>Example #4 Final constants example as of PHP 8.1.0</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    final public const </span><span style="color: #0000BB">X </span><span style="color: #007700">= </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">Bar </span><span style="color: #007700">extends </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">X </span><span style="color: #007700">= </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Fatal error: Bar::X cannot override final constant Foo::X<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   As of PHP 8.0.0, private methods may not be declared final except for the <a href="language.oop5.decon.php#language.oop5.decon.constructor" class="link">constructor</a>.
  </span>
 </p></blockquote>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   A property that is declared <a href="language.oop5.visibility.php#language.oop5.visibility-members-aviz" class="link"><code class="literal">private(set)</code></a> is implicitly <code class="literal">final</code>.
  </span>
 </p></blockquote>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/final.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.final%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.final&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.final.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92295">  <div class="votes">
    <div id="Vu92295">
    <a href="/manual/vote-note.php?id=92295&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92295">
    <a href="/manual/vote-note.php?id=92295&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92295" title="82% like this...">
    304
    </div>
  </div>
  <a href="#92295" class="name">
  <strong class="user"><em>jriddy at gmail dot com</em></strong></a><a class="genanchor" href="#92295"> &para;</a><div class="date" title="2009-07-17 02:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92295">
<div class="phpcode"><code><span class="html">Note for Java developers: the 'final' keyword is not used for class constants in PHP. We use the keyword 'const'.<br /><br /><a href="http://php.net/manual/en/language.oop5.constants.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.oop5.constants.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="74058">  <div class="votes">
    <div id="Vu74058">
    <a href="/manual/vote-note.php?id=74058&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74058">
    <a href="/manual/vote-note.php?id=74058&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74058" title="77% like this...">
    110
    </div>
  </div>
  <a href="#74058" class="name">
  <strong class="user"><em>penartur at yandex dot ru</em></strong></a><a class="genanchor" href="#74058"> &para;</a><div class="date" title="2007-03-22 01:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74058">
<div class="phpcode"><code><span class="html">Note that you cannot ovverride final methods even if they are defined as private in parent class.
<br />Thus, the following example:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">parentClass </span><span class="keyword">{
<br />    final private function </span><span class="default">someMethod</span><span class="keyword">() { }
<br />}
<br />class </span><span class="default">childClass </span><span class="keyword">extends </span><span class="default">parentClass </span><span class="keyword">{
<br />    private function </span><span class="default">someMethod</span><span class="keyword">() { }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>dies with error "Fatal error: Cannot override final method parentClass::someMethod() in ***.php on line 7"
<br />
<br />Such behaviour looks slight unexpected because in child class we cannot know, which private methods exists in a parent class and vice versa.
<br />
<br />So, remember that if you defined a private final method, you cannot place method with the same name in child class.</span></code></div>
  </div>
 </div>
  <div class="note" id="114038">  <div class="votes">
    <div id="Vu114038">
    <a href="/manual/vote-note.php?id=114038&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114038">
    <a href="/manual/vote-note.php?id=114038&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114038" title="71% like this...">
    54
    </div>
  </div>
  <a href="#114038" class="name">
  <strong class="user"><em>someone dot else at elsewhere dot net</em></strong></a><a class="genanchor" href="#114038"> &para;</a><div class="date" title="2014-01-04 10:40"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114038">
<div class="phpcode"><code><span class="html">@thomas at somewhere dot com<br /><br />The 'final' keyword is extremely useful.  Inheritance is also useful, but can be abused and becomes problematic in large applications.  If you ever come across a finalized class or method that you wish to extend, write a decorator instead.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">final class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public </span><span class="default">method doFoo</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// do something useful and return a result<br />    </span><span class="keyword">}<br />}<br /><br />final class </span><span class="default">FooDecorator<br /></span><span class="keyword">{<br />    private </span><span class="default">$foo</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">Foo $foo</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">doFoo</span><span class="keyword">()<br />    {<br />          </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">-&gt;</span><span class="default">doFoo</span><span class="keyword">();<br />          </span><span class="comment">// ... customize result ...<br />          </span><span class="keyword">return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128448">  <div class="votes">
    <div id="Vu128448">
    <a href="/manual/vote-note.php?id=128448&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128448">
    <a href="/manual/vote-note.php?id=128448&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128448" title="71% like this...">
    3
    </div>
  </div>
  <a href="#128448" class="name">
  <strong class="user"><em>Rumour</em></strong></a><a class="genanchor" href="#128448"> &para;</a><div class="date" title="2023-05-03 01:56"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128448">
<div class="phpcode"><code><span class="html">Class constants CAN be “finalised” since PHP8.1. To partly contradict to the most popular user contribution, that was written a long time ago, they were still absolutely right.</span></code></div>
  </div>
 </div>
  <div class="note" id="115148">  <div class="votes">
    <div id="Vu115148">
    <a href="/manual/vote-note.php?id=115148&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115148">
    <a href="/manual/vote-note.php?id=115148&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115148" title="61% like this...">
    14
    </div>
  </div>
  <a href="#115148" class="name">
  <strong class="user"><em>mattsch at gmail dot com</em></strong></a><a class="genanchor" href="#115148"> &para;</a><div class="date" title="2014-06-03 07:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115148">
<div class="phpcode"><code><span class="html">You can use final methods to replace class constants.  The reason for this is you cannot unit test a class constant used in another class in isolation because you cannot mock a constant.   Final methods allow you to have the same functionality as a constant while keeping your code loosely coupled.<br /><br />Tight coupling example (bad to use constants):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">FooInterface<br /></span><span class="keyword">{<br />}<br /><br />class </span><span class="default">Foo </span><span class="keyword">implements </span><span class="default">FooInterface<br /></span><span class="keyword">{<br />    const </span><span class="default">BAR </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />    }<br />}<br /><br />interface </span><span class="default">BazInterface<br /></span><span class="keyword">{<br />    public function </span><span class="default">getFooBar</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// This class cannot be unit tested in isolation because the actual class Foo must also be loaded to get the value of Foo::BAR<br /></span><span class="keyword">class </span><span class="default">Baz </span><span class="keyword">implements </span><span class="default">BazInterface<br /></span><span class="keyword">{<br />    private </span><span class="default">$foo</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">FooInterface $foo</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getFooBar</span><span class="keyword">()<br />    {<br />        return </span><span class="default">Foo</span><span class="keyword">::</span><span class="default">BAR</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$baz </span><span class="keyword">= new </span><span class="default">Baz</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">$baz</span><span class="keyword">-&gt;</span><span class="default">getFooBar</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Loose coupling example (eliminated constant usage):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">FooInterface<br /></span><span class="keyword">{<br />    public function </span><span class="default">bar</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">Foo </span><span class="keyword">implements </span><span class="default">FooInterface<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />    }<br /><br />    final public function </span><span class="default">bar</span><span class="keyword">()<br />    {<br />        return </span><span class="default">1</span><span class="keyword">;<br />    }<br />}<br /><br />interface </span><span class="default">BazInterface<br /></span><span class="keyword">{<br />    public function </span><span class="default">getFooBar</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// This class can be unit tested in isolation because class Foo does not need to be loaded by mocking FooInterface and calling the final bar method.<br /></span><span class="keyword">class </span><span class="default">Baz </span><span class="keyword">implements </span><span class="default">BazInterface<br /></span><span class="keyword">{<br />    private </span><span class="default">$foo</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">FooInterface $foo</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getFooBar</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">();<br />    }<br /><br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$baz </span><span class="keyword">= new </span><span class="default">Baz</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">$baz</span><span class="keyword">-&gt;</span><span class="default">getFooBar</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78862">  <div class="votes">
    <div id="Vu78862">
    <a href="/manual/vote-note.php?id=78862&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78862">
    <a href="/manual/vote-note.php?id=78862&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78862" title="62% like this...">
    7
    </div>
  </div>
  <a href="#78862" class="name">
  <strong class="user"><em>slorenzo at clug dot org dot ve</em></strong></a><a class="genanchor" href="#78862"> &para;</a><div class="date" title="2007-10-30 11:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78862">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">parentClass </span><span class="keyword">{<br />    public function </span><span class="default">someMethod</span><span class="keyword">() { }<br />}<br />class </span><span class="default">childClass </span><span class="keyword">extends </span><span class="default">parentClass </span><span class="keyword">{<br />    public final function </span><span class="default">someMethod</span><span class="keyword">() { } </span><span class="comment">//override parent function<br /></span><span class="keyword">}<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">childClass</span><span class="keyword">;<br /></span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">someMethod</span><span class="keyword">(); </span><span class="comment">//call the override function in chield class<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115012">  <div class="votes">
    <div id="Vu115012">
    <a href="/manual/vote-note.php?id=115012&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115012">
    <a href="/manual/vote-note.php?id=115012&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115012" title="60% like this...">
    11
    </div>
  </div>
  <a href="#115012" class="name">
  <strong class="user"><em>cottton at i-stats dot net</em></strong></a><a class="genanchor" href="#115012"> &para;</a><div class="date" title="2014-05-12 06:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115012">
<div class="phpcode"><code><span class="html">imo good to know:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">BaseClass<br /></span><span class="keyword">{<br />    protected static </span><span class="default">$var </span><span class="keyword">= </span><span class="string">'i belong to BaseClass'</span><span class="keyword">;<br /><br />    public static function </span><span class="default">test</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and this is my var: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">changeVar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$var </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and i just changed my $var to: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">;<br />    }<br />    final public static function </span><span class="default">dontCopyMe</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$var </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and i just changed my $var to: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">ChildClass </span><span class="keyword">extends </span><span class="default">BaseClass<br /></span><span class="keyword">{<br />    protected static </span><span class="default">$var </span><span class="keyword">= </span><span class="string">'i belong to ChildClass'</span><span class="keyword">;<br /><br />    public static function </span><span class="default">test</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and this is my var: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">.<br />            </span><span class="string">'and this is my parent var: `'</span><span class="keyword">.</span><span class="default">parent</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`'</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">changeVar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$var </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and i just changed my $var to: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">.<br />            </span><span class="string">'but the parent $var is still: `'</span><span class="keyword">.</span><span class="default">parent</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`'</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">dontCopyMe</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) </span><span class="comment">// Fatal error: Cannot override final method BaseClass::dontCopyMe() in ...<br />    </span><span class="keyword">{<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$var </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;hr&gt;'</span><span class="keyword">.<br />            </span><span class="string">'i am `'</span><span class="keyword">.</span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'()` and i just changed my $var to: `'</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">$var</span><span class="keyword">.</span><span class="string">'`&lt;br&gt;'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">BaseClass</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();  </span><span class="comment">// i am `BaseClass::test()` and this is my var: `i belong to BaseClass`<br /></span><span class="default">ChildClass</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">(); </span><span class="comment">// i am `ChildClass::test()` and this is my var: `i belong to ChildClass`<br />                    // and this is my parent var: `i belong to BaseClass`<br /></span><span class="default">ChildClass</span><span class="keyword">::</span><span class="default">changeVar</span><span class="keyword">(</span><span class="string">'something new'</span><span class="keyword">); </span><span class="comment">// i am `ChildClass::changeVar()` and i just changed my $var to: `something new`<br />                                        // but the parent $var is still: `i belong to BaseClass`<br /></span><span class="default">BaseClass</span><span class="keyword">::</span><span class="default">changeVar</span><span class="keyword">(</span><span class="string">'something different'</span><span class="keyword">); </span><span class="comment">// i am `BaseClass::changeVar()` and i just changed my $var to: `something different`<br /></span><span class="default">BaseClass</span><span class="keyword">::</span><span class="default">dontCopyMe</span><span class="keyword">(</span><span class="string">'a text'</span><span class="keyword">); </span><span class="comment">// i am `BaseClass::dontCopyMe()` and i just changed my $var to: `a text`<br /></span><span class="default">ChildClass</span><span class="keyword">::</span><span class="default">dontCopyMe</span><span class="keyword">(</span><span class="string">'a text'</span><span class="keyword">); </span><span class="comment">// Fatal error: Cannot override final method BaseClass::dontCopyMe() in ...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87444">  <div class="votes">
    <div id="Vu87444">
    <a href="/manual/vote-note.php?id=87444&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87444">
    <a href="/manual/vote-note.php?id=87444&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87444" title="60% like this...">
    10
    </div>
  </div>
  <a href="#87444" class="name">
  <strong class="user"><em>santoshjoshi2003 at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#87444"> &para;</a><div class="date" title="2008-12-05 02:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87444">
<div class="phpcode"><code><span class="html">The use of final keyword is just like that occurs in Java<br />In java final has three uses<br />    1) prevent class Inheritance<br />    2) prevent method overriding or redifination of <br />        method in subclass <br />    3) and to declare constants <br /> But the third point seems to be missing from the PHP<br /> I guess, as i am a java developer Currently gaining competence in PHP</span></code></div>
  </div>
 </div>
  <div class="note" id="100149">  <div class="votes">
    <div id="Vu100149">
    <a href="/manual/vote-note.php?id=100149&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100149">
    <a href="/manual/vote-note.php?id=100149&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100149" title="55% like this...">
    7
    </div>
  </div>
  <a href="#100149" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#100149"> &para;</a><div class="date" title="2010-09-28 07:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100149">
<div class="phpcode"><code><span class="html">The behaviour of FINAL is not as serious as you may think. A little explample:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />     final private function </span><span class="default">method</span><span class="keyword">(){}     <br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    private function </span><span class="default">method</span><span class="keyword">(){}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Normally you would expect some of the following will happen:<br />- An error that final and private keyword cannot be used together<br />- No error as the private visibility says, that a method/var/etc. is only visible within the same class<br /><br />But what happens is PHP is a little curios: "Cannot override final method A::method()"<br /><br />So its possible to deny method names in subclasses! Don't know if this is  a good behavior, but maybe its useful for your purpose.</span></code></div>
  </div>
 </div>
  <div class="note" id="129694">  <div class="votes">
    <div id="Vu129694">
    <a href="/manual/vote-note.php?id=129694&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129694">
    <a href="/manual/vote-note.php?id=129694&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129694" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129694" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129694"> &para;</a><div class="date" title="2024-08-08 07:14"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129694">
<div class="phpcode"><code><span class="html">When desiring a special class structure finalizing magic methods maybe helpful.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">A </span><span class="keyword">{ <br />  final public function </span><span class="default">__construnct</span><span class="keyword">(){ echo </span><span class="string">"A"</span><span class="keyword">; } <br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">(){ echo </span><span class="string">"B"</span><span class="keyword">; }<br />}<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">(); </span><span class="comment">// outputs: PHP Fatal error:  Cannot override final method a\A::__construct()<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99705">  <div class="votes">
    <div id="Vu99705">
    <a href="/manual/vote-note.php?id=99705&amp;page=language.oop5.final&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99705">
    <a href="/manual/vote-note.php?id=99705&amp;page=language.oop5.final&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99705" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99705" class="name">
  <strong class="user"><em>Baldurien</em></strong></a><a class="genanchor" href="#99705"> &para;</a><div class="date" title="2010-08-31 01:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99705">
<div class="phpcode"><code><span class="html">"Note for Java developers: the 'final' keyword is not used for class constants in PHP. We use the keyword 'const'."<br /><br /><a href="http://php.net/manual/en/language.oop5.constants.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.oop5.constants.php</a><br /><br />This is more or less true, regardless of the fact that constant (being defined at class level or not) in PHP are only scalar (int, string, etc) while in Java they may be pure object (ex: java.awat.Color.BLACK). The only possible solution of having such kind of constant is :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Bar </span><span class="keyword">{...}<br />class </span><span class="default">Foo </span><span class="keyword">{<br />  public static </span><span class="default">$FOOBAR</span><span class="keyword">;<br /><br />  static function </span><span class="default">__init</span><span class="keyword">() {<br />    static </span><span class="default">$init </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (</span><span class="default">$init</span><span class="keyword">) throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Constants were already initialized'</span><span class="keyword">);<br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$FOOBAR </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br />    </span><span class="default">$init </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">__init</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>That said, perhaps it is useless unless PHP automatically calls the __init() method.<br /><br />However, one alternative that could be done in certain case is this : <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">) { <br />  ... require </span><span class="default">the file where the </span><span class="keyword">class </span><span class="default">is </span><span class="keyword">...<br />  if (</span><span class="default">interface_exists</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">)) return;<br />  if (</span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">)) {<br />    </span><span class="default">$rc </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">); <br />    if (!</span><span class="default">$rc</span><span class="keyword">-&gt;</span><span class="default">hasMethod</span><span class="keyword">(</span><span class="string">'__init'</span><span class="keyword">)) return;<br />    </span><span class="default">$m </span><span class="keyword">= </span><span class="default">$rc</span><span class="keyword">-&gt;</span><span class="default">getMethod</span><span class="keyword">(</span><span class="string">'__init'</span><span class="keyword">);<br />    if (!(</span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">isStatic</span><span class="keyword">() &amp;&amp; </span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">isPrivate</span><span class="keyword">())) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">$className </span><span class="keyword">. </span><span class="string">' __init() method must be private and static !'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">invoke</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">);<br />    return;<br />  }<br />  throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Class or interface not found ' </span><span class="keyword">. </span><span class="default">$className</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This can only work when one class is defined per file, since we are assured that __autoload() will be called to load the file containing the class.<br /><br />eg: <br /><br />test2.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">B </span><span class="keyword">{<br /> public static </span><span class="default">$X</span><span class="keyword">;<br /> private static function </span><span class="default">__init</span><span class="keyword">() {<br />   echo </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">; <br />   </span><span class="default">self</span><span class="keyword">::</span><span class="default">$X </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /> }<br />}<br />class </span><span class="default">A </span><span class="keyword">{<br />  public static </span><span class="default">$Y</span><span class="keyword">;<br />  private static function </span><span class="default">__init</span><span class="keyword">() {<br />    echo </span><span class="string">'A'</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">; <br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$Y </span><span class="keyword">= array(</span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span>test.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) {<br />  if (</span><span class="default">$n </span><span class="keyword">== </span><span class="string">'A' </span><span class="keyword">|| </span><span class="default">$n </span><span class="keyword">== </span><span class="string">'B'</span><span class="keyword">) require </span><span class="string">'test2.php'</span><span class="keyword">;<br />  ... do </span><span class="default">our __init</span><span class="keyword">() </span><span class="default">trick </span><span class="keyword">...<br />}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">B</span><span class="keyword">::</span><span class="default">$X</span><span class="keyword">); </span><span class="comment">// shows B, then array(2) (1, 2)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">A</span><span class="keyword">::</span><span class="default">$Y</span><span class="keyword">); </span><span class="comment">// shows NULL.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.final&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.final.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
