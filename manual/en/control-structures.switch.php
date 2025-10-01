<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: switch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.switch.php">
 <link rel="shorturl" href="https://www.php.net/switch">
 <link rel="alternate" href="https://www.php.net/switch" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/control-structures.continue.php">
 <link rel="next" href="https://www.php.net/manual/en/control-structures.match.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.switch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.switch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.switch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.switch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.switch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.switch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.switch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.switch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.switch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.switch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.switch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="switch" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: switch - Manual" />
<meta name="twitter:description" content="switch" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: switch - Manual" />
<meta itemprop="description" content="switch" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="switch" />

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
        <a href="control-structures.match.php">
          match &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.continue.php">
          &laquo; continue        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/control-structures.switch.php' selected="selected">English</option>
            <option value='de/control-structures.switch.php'>German</option>
            <option value='es/control-structures.switch.php'>Spanish</option>
            <option value='fr/control-structures.switch.php'>French</option>
            <option value='it/control-structures.switch.php'>Italian</option>
            <option value='ja/control-structures.switch.php'>Japanese</option>
            <option value='pt_BR/control-structures.switch.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.switch.php'>Russian</option>
            <option value='tr/control-structures.switch.php'>Turkish</option>
            <option value='uk/control-structures.switch.php'>Ukrainian</option>
            <option value='zh/control-structures.switch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.switch" class="sect1">
 <h2 class="title">switch</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="simpara">
  The <code class="literal">switch</code> statement is similar to a series of
  IF statements on the same expression.  In many occasions, you may
  want to compare the same variable (or expression) with many
  different values, and execute a different piece of code depending
  on which value it equals to.  This is exactly what the
  <code class="literal">switch</code> statement is for.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Note that unlike some other languages, the
   <a href="control-structures.continue.php" class="link">continue</a> statement
   applies to <code class="literal">switch</code> and acts similar to <code class="literal">break</code>.  If you
   have a <code class="literal">switch</code> inside a loop and wish to continue to the next iteration of
   the outer loop, use <code class="literal">continue 2</code>.
  </span>
 </p></blockquote>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Note that switch/case does
   <a href="types.comparisons.php#types.comparisions-loose" class="link">loose comparison</a>.
  </p>
 </p></blockquote>

 <p class="para">
  In the following example, each code block is equivalent.
  One uses a series of <code class="literal">if</code> and
  <code class="literal">elseif</code> statements, and the other a
  <code class="literal">switch</code> statement.  In each case, the output is the same.
  <div class="example" id="example-191">
   <p><strong>Example #1 <code class="literal">switch</code> structure</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This switch statement:<br /><br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 0"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 1"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 2"</span><span style="color: #007700">;<br />        break;<br />}<br /><br /></span><span style="color: #FF8000">// Is equivalent to:<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$i </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"i equals 0"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">$i </span><span style="color: #007700">== </span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"i equals 1"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">$i </span><span style="color: #007700">== </span><span style="color: #0000BB">2</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"i equals 2"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  It is important to understand how the <code class="literal">switch</code>
  statement is executed in order to avoid mistakes.  The
  <code class="literal">switch</code> statement executes line by line
  (actually, statement by statement).  In the beginning, no code is
  executed.  Only when a <code class="literal">case</code> statement is found
  whose expression evaluates to a value that matches the value of the
  <code class="literal">switch</code> expression does PHP begin to execute the
  statements.  PHP continues to execute the statements until the end
  of the <code class="literal">switch</code> block, or the first time it sees
  a <code class="literal">break</code> statement.  If you don&#039;t write a
  <code class="literal">break</code> statement at the end of a case&#039;s
  statement list, PHP will go on executing the statements of the
  following case.  For example:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 0"</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 1"</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 2"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  Here, if <var class="varname">$i</var> is equal to 0, PHP would execute all of the echo
  statements!  If <var class="varname">$i</var> is equal to 1, PHP would execute the last two
  echo statements. You would get the expected behavior (&#039;i equals 2&#039;
  would be displayed) only if <var class="varname">$i</var> is equal to 2.  Thus,
  it is important not to forget <code class="literal">break</code> statements
  (even though you may want to avoid supplying them on purpose under
  certain circumstances).
 </p>
 <p class="simpara">
  In a <code class="literal">switch</code> statement, the condition is
  evaluated only once and the result is compared to each
  <code class="literal">case</code> statement. In an <code class="literal">elseif</code>
  statement, the condition is evaluated again. If your condition is
  more complicated than a simple compare and/or is in a tight loop,
  a <code class="literal">switch</code> may be faster.
 </p>
 <p class="para">
  The statement list for a case can also be empty, which simply
  passes control into the statement list for the next case.
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i is less than 3 but not negative"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">3</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i is 3"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  A special case is the <code class="literal">default</code> case.  This case matches
  anything that wasn&#039;t matched by the other cases.  For example:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 0"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 1"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 2"</span><span style="color: #007700">;<br />        break;<br />    default:<br />       echo </span><span style="color: #DD0000">"i is not equal to 0, 1 or 2"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Multiple default cases will raise a
    <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong> error.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Technically the <code class="literal">default</code> case may be listed
    in any order. It will only be used if no other case matches.
    However, by convention it is best to place it at the end as the
    last branch.
   </span>
  </p></blockquote>
 </p>
 <p class="para">
  If no <code class="literal">case</code> branch matches, and there is no <code class="literal">default</code>
  branch, then no code will be executed, just as if no <code class="literal">if</code> statement was true.
 </p>
 <p class="para">
  A case value may be given as an expression. However, that expression will be
  evaluated on its own and then loosely compared with the switch value. That means
  it cannot be used for complex evaluations of the switch value.  For example:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$target </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /><br />switch (</span><span style="color: #0000BB">$target</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"A"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"B"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">3</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"C"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">4</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"D"</span><span style="color: #007700">;<br />        break;<br />}<br /><br /></span><span style="color: #FF8000">// Prints "B"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  For more complex comparisons, the value <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> may be used as the switch value.
  Or, alternatively, <code class="literal">if</code>-<code class="literal">else</code> blocks instead of <code class="literal">switch</code>.
  <div class="informalexample">
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$offset </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /><br />switch (</span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">$offset </span><span style="color: #007700">=== </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"A"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">$offset </span><span style="color: #007700">=== </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"B"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">$offset </span><span style="color: #007700">=== </span><span style="color: #0000BB">3</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"C"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">$start </span><span style="color: #007700">- </span><span style="color: #0000BB">$offset </span><span style="color: #007700">=== </span><span style="color: #0000BB">4</span><span style="color: #007700">:<br />        print </span><span style="color: #DD0000">"D"</span><span style="color: #007700">;<br />        break;<br />}<br /><br /></span><span style="color: #FF8000">// Prints "B"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  The alternative syntax for control structures is supported with
  switches. For more information, see <a href="control-structures.alternative-syntax.php" class="link">Alternative syntax
  for control structures</a>.
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">$i</span><span style="color: #007700">):<br />    case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 0"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 1"</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"i equals 2"</span><span style="color: #007700">;<br />        break;<br />    default:<br />        echo </span><span style="color: #DD0000">"i is not equal to 0, 1 or 2"</span><span style="color: #007700">;<br />endswitch;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  It&#039;s possible to use a semicolon instead of a colon after a case like:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch(</span><span style="color: #0000BB">$beer</span><span style="color: #007700">)<br />{<br />    case </span><span style="color: #DD0000">'tuborg'</span><span style="color: #007700">;<br />    case </span><span style="color: #DD0000">'carlsberg'</span><span style="color: #007700">;<br />    case </span><span style="color: #DD0000">'stella'</span><span style="color: #007700">;<br />    case </span><span style="color: #DD0000">'heineken'</span><span style="color: #007700">;<br />        echo </span><span style="color: #DD0000">'Good choice'</span><span style="color: #007700">;<br />        break;<br />    default;<br />        echo </span><span style="color: #DD0000">'Please make a new selection...'</span><span style="color: #007700">;<br />        break;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="control-structures.match.php" class="link">match</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/switch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.switch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.switch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.switch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109034">  <div class="votes">
    <div id="Vu109034">
    <a href="/manual/vote-note.php?id=109034&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109034">
    <a href="/manual/vote-note.php?id=109034&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109034" title="72% like this...">
    300
    </div>
  </div>
  <a href="#109034" class="name">
  <strong class="user"><em>MaxTheDragon at home dot nl</em></strong></a><a class="genanchor" href="#109034"> &para;</a><div class="date" title="2012-06-14 02:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109034">
<div class="phpcode"><code><span class="html">This is listed in the documentation above, but it's a bit tucked away between the paragraphs. The difference between a series of if statements and the switch statement is that the expression you're comparing with, is evaluated only once in a switch statement. I think this fact needs a little bit more attention, so here's an example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />if(++</span><span class="default">$a </span><span class="keyword">== </span><span class="default">3</span><span class="keyword">) echo </span><span class="default">3</span><span class="keyword">;<br />elseif(++</span><span class="default">$a </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) echo </span><span class="default">2</span><span class="keyword">;<br />elseif(++</span><span class="default">$a </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) echo </span><span class="default">1</span><span class="keyword">;<br />else echo </span><span class="string">"No match!"</span><span class="keyword">;<br /><br /></span><span class="comment">// Outputs: 2<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />switch(++</span><span class="default">$a</span><span class="keyword">) {<br />    case </span><span class="default">3</span><span class="keyword">: echo </span><span class="default">3</span><span class="keyword">; break;<br />    case </span><span class="default">2</span><span class="keyword">: echo </span><span class="default">2</span><span class="keyword">; break;<br />    case </span><span class="default">1</span><span class="keyword">: echo </span><span class="default">1</span><span class="keyword">; break;<br />    default: echo </span><span class="string">"No match!"</span><span class="keyword">; break;<br />}<br /><br /></span><span class="comment">// Outputs: 1<br /></span><span class="default">?&gt;<br /></span><br />It is therefore perfectly safe to do:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">switch(</span><span class="default">winNobelPrizeStartingFromBirth</span><span class="keyword">()) {<br />case </span><span class="string">"peace"</span><span class="keyword">: echo </span><span class="string">"You won the Nobel Peace Prize!"</span><span class="keyword">; break;<br />case </span><span class="string">"physics"</span><span class="keyword">: echo </span><span class="string">"You won the Nobel Prize in Physics!"</span><span class="keyword">; break;<br />case </span><span class="string">"chemistry"</span><span class="keyword">: echo </span><span class="string">"You won the Nobel Prize in Chemistry!"</span><span class="keyword">; break;<br />case </span><span class="string">"medicine"</span><span class="keyword">: echo </span><span class="string">"You won the Nobel Prize in Medicine!"</span><span class="keyword">; break;<br />case </span><span class="string">"literature"</span><span class="keyword">: echo </span><span class="string">"You won the Nobel Prize in Literature!"</span><span class="keyword">; break;<br />default: echo </span><span class="string">"You bought a rusty iron medal from a shady guy who insists it's a Nobel Prize..."</span><span class="keyword">; break;<br />}<br /></span><span class="default">?&gt;<br /></span><br />without having to worry about the function being re-evaluated for every case. There's no need to preemptively save the result in a variable either.</span></code></div>
  </div>
 </div>
  <div class="note" id="123036">  <div class="votes">
    <div id="Vu123036">
    <a href="/manual/vote-note.php?id=123036&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123036">
    <a href="/manual/vote-note.php?id=123036&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123036" title="73% like this...">
    119
    </div>
  </div>
  <a href="#123036" class="name">
  <strong class="user"><em>septerrianin at mail dot ru</em></strong></a><a class="genanchor" href="#123036"> &para;</a><div class="date" title="2018-08-15 09:15"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123036">
<div class="phpcode"><code><span class="html">php 7.2.8.<br />The answer to the eternal question " what is faster?":<br />1 000 000 000 iterations.<br /><br /><span class="default">&lt;?php<br />$s </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />  </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">%</span><span class="default">10</span><span class="keyword">;<br />  if (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">1</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">3</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">3</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">4</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">4</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">5</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">5</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">6</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">6</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">7</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">7</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">8</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">8</span><span class="keyword">;<br />  } elseif (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">9</span><span class="keyword">) {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">9</span><span class="keyword">;<br />  } else {<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">10</span><span class="keyword">;<br />  }<br />}<br />print(</span><span class="string">"if: "</span><span class="keyword">.(</span><span class="default">time</span><span class="keyword">() - </span><span class="default">$s</span><span class="keyword">).</span><span class="string">"sec\n"</span><span class="keyword">);<br /> <br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />  </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">%</span><span class="default">10</span><span class="keyword">;<br />  switch (</span><span class="default">$x</span><span class="keyword">) {<br />  case </span><span class="default">1</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">1</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">2</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">3</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">3</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">4</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">4</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">5</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">5</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">6</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">6</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">7</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">7</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">8</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">8</span><span class="keyword">;<br />    break;<br />  case </span><span class="default">9</span><span class="keyword">:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">9</span><span class="keyword">;<br />    break;<br />  default:<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">* </span><span class="default">10</span><span class="keyword">;<br />  }<br />}<br />print(</span><span class="string">"switch: "</span><span class="keyword">.(</span><span class="default">time</span><span class="keyword">() - </span><span class="default">$s</span><span class="keyword">).</span><span class="string">"sec\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Results:<br />if: 69sec<br />switch: 42sec</span></code></div>
  </div>
 </div>
  <div class="note" id="129665">  <div class="votes">
    <div id="Vu129665">
    <a href="/manual/vote-note.php?id=129665&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129665">
    <a href="/manual/vote-note.php?id=129665&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129665" title="76% like this...">
    7
    </div>
  </div>
  <a href="#129665" class="name">
  <strong class="user"><em>php at nospam dot k39 dot se</em></strong></a><a class="genanchor" href="#129665"> &para;</a><div class="date" title="2024-07-23 08:20"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129665">
<div class="phpcode"><code><span class="html">It is possible to prevent nested switch/match/if blocks by checking for multiple cases at once (just beware that PHP uses loose comparison here).<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">"abc"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"def"</span><span class="keyword">;<br /><br />switch ([</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">]) {<br />    case [</span><span class="string">"abc"</span><span class="keyword">, </span><span class="string">"def"</span><span class="keyword">]:<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        break;<br />    default:<br />        </span><span class="default">$result </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />} </span><span class="comment">// $result == 1<br /></span><span class="default">?&gt;<br /></span><br />If for some cases one of the values is not important, you can use the variable itself:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">"abc"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"def"</span><span class="keyword">;<br /><br />switch ([</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">]) {<br />    case [</span><span class="string">"xyz"</span><span class="keyword">, </span><span class="string">"def"</span><span class="keyword">]:<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        break;<br />    case [</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"def"</span><span class="keyword">]:<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />        break;<br />    default:<br />        </span><span class="default">$result </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />} </span><span class="comment">// $result == 2<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="9610">  <div class="votes">
    <div id="Vu9610">
    <a href="/manual/vote-note.php?id=9610&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9610">
    <a href="/manual/vote-note.php?id=9610&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9610" title="60% like this...">
    81
    </div>
  </div>
  <a href="#9610" class="name">
  <strong class="user"><em>nospam at please dot com</em></strong></a><a class="genanchor" href="#9610"> &para;</a><div class="date" title="2000-11-14 05:18"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9610">
<div class="phpcode"><code><span class="html">Just a trick I have picked up:
<br />
<br />If you need to evaluate several variables to find the first one with an actual value, TRUE for instance. You can do it this was.
<br />
<br />There is probably a better way but it has worked out well for me.
<br />
<br />switch (true) {
<br />
<br />  case (X != 1):
<br />
<br />  case (Y != 1):
<br />
<br />  default:
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="127887">  <div class="votes">
    <div id="Vu127887">
    <a href="/manual/vote-note.php?id=127887&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127887">
    <a href="/manual/vote-note.php?id=127887&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127887" title="60% like this...">
    6
    </div>
  </div>
  <a href="#127887" class="name">
  <strong class="user"><em>me at czarpino dot com</em></strong></a><a class="genanchor" href="#127887"> &para;</a><div class="date" title="2022-11-01 04:53"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127887">
<div class="phpcode"><code><span class="html">Although noted elsewhere, still worth noting is how loose comparison in switch-case was also affected by the change in string to number comparison. Prior PHP8, strings were converted to int before comparison. The reverse is now true which can cause issues for logic that relied on this behavior. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">testSwitch</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />    switch (</span><span class="default">$key</span><span class="keyword">) {<br />        case </span><span class="string">'non numeric string'</span><span class="keyword">:<br />            echo </span><span class="default">$key </span><span class="keyword">. </span><span class="string">' matches "non numeric string"'</span><span class="keyword">;<br />            break;<br />    }<br />}<br /><br /></span><span class="default">testSwitch</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);    </span><span class="comment">// pre-PHP8, returns '0 matches "non numeric string"'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127951">  <div class="votes">
    <div id="Vu127951">
    <a href="/manual/vote-note.php?id=127951&amp;page=control-structures.switch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127951">
    <a href="/manual/vote-note.php?id=127951&amp;page=control-structures.switch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127951" title="52% like this...">
    2
    </div>
  </div>
  <a href="#127951" class="name">
  <strong class="user"><em>j dot kane dot third at gmail dot com</em></strong></a><a class="genanchor" href="#127951"> &para;</a><div class="date" title="2022-11-22 07:46"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127951">
<div class="phpcode"><code><span class="html">The default case appears to always be evaluated last. If break is excluded from the default case, then the proceeding cases will be reevaluated. This behavior appears to be undocumented.<br /><br /><span class="default">&lt;?php<br /><br />$kinds </span><span class="keyword">= [</span><span class="string">'moo'</span><span class="keyword">, </span><span class="string">'kind1'</span><span class="keyword">, </span><span class="string">'kind2'</span><span class="keyword">];<br /><br />foreach (</span><span class="default">$kinds </span><span class="keyword">as </span><span class="default">$kind</span><span class="keyword">) {<br />    switch(</span><span class="default">$kind</span><span class="keyword">)<br />    {<br />        default:<br />            </span><span class="comment">// The kind wasn't valid, set it to the default<br />            </span><span class="default">$kind </span><span class="keyword">= </span><span class="string">'kind1'</span><span class="keyword">;<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'default'</span><span class="keyword">);<br />    <br />        case </span><span class="string">'kind1'</span><span class="keyword">:<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">);<br />            break;<br />    <br />        case </span><span class="string">'kind2'</span><span class="keyword">:<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'2'</span><span class="keyword">);<br />            break;<br />    <br />        case </span><span class="string">'kindn'</span><span class="keyword">:<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">'n-th'</span><span class="keyword">);<br />            break;<br />    }<br />    <br />    echo </span><span class="string">"\n\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.switch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.switch.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
