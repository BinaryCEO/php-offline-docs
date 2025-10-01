<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: User Submitted Data - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.variables.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.variables.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.variables.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/security.php">
 <link rel="prev" href="https://www.php.net/manual/en/security.errors.php">
 <link rel="next" href="https://www.php.net/manual/en/security.hiding.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.variables.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.variables.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.variables.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.variables.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.variables.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.variables.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.variables.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.variables.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.variables.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.variables.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.variables.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="User Submitted Data" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: User Submitted Data - Manual" />
<meta name="twitter:description" content="User Submitted Data" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: User Submitted Data - Manual" />
<meta itemprop="description" content="User Submitted Data" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="User Submitted Data" />

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
        <a href="security.hiding.php">
          Hiding PHP &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="security.errors.php">
          &laquo; Error Reporting        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='security.php'>Security</a></li>      </ul>
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
            <option value='en/security.variables.php' selected="selected">English</option>
            <option value='de/security.variables.php'>German</option>
            <option value='es/security.variables.php'>Spanish</option>
            <option value='fr/security.variables.php'>French</option>
            <option value='it/security.variables.php'>Italian</option>
            <option value='ja/security.variables.php'>Japanese</option>
            <option value='pt_BR/security.variables.php'>Brazilian Portuguese</option>
            <option value='ru/security.variables.php'>Russian</option>
            <option value='tr/security.variables.php'>Turkish</option>
            <option value='uk/security.variables.php'>Ukrainian</option>
            <option value='zh/security.variables.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security.variables" class="chapter">
 <h1 class="title">User Submitted Data</h1>

 <p class="para">
  The greatest weakness in many <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> programs is not inherent in the
  language itself, but merely an issue of code not being written with
  security in mind. For this reason, you should always take the time
  to consider the implications of a given piece of code, to ascertain
  the possible damage if an unexpected variable is submitted to it.
  <div class="example" id="example-527">
   <p><strong>Example #1 Dangerous Variable Usage</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// remove a file from the user's home directory... or maybe<br />// somebody else's?<br /></span><span style="color: #0000BB">unlink </span><span style="color: #007700">(</span><span style="color: #0000BB">$evil_var</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Write logging of their access... or maybe an /etc/passwd entry?<br /></span><span style="color: #0000BB">fwrite </span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$evil_var</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute something trivial.. or rm -rf *?<br /></span><span style="color: #0000BB">system </span><span style="color: #007700">(</span><span style="color: #0000BB">$evil_var</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">exec </span><span style="color: #007700">(</span><span style="color: #0000BB">$evil_var</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  You should always carefully examine your code to make sure that any
  variables being submitted from a web browser are being properly
  checked, and ask yourself the following questions:
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Will this script only affect the intended files?
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Can unusual or undesirable data be acted upon?
    </span>
   </li>
   <li class="listitem">
   <span class="simpara">
     Can this script be used in unintended ways?
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Can this be used in conjunction with other scripts in a negative
     manner?
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Will any transactions be adequately logged?
    </span>
   </li>
  </ul>
 </p>
 <p class="para">
  By adequately asking these questions while writing the script,
  rather than later, you prevent an unfortunate re-write when you
  need to increase your security. By starting out with this mindset,
  you won&#039;t guarantee the security of your system, but you can help
  improve it.
 </p>
 <p class="para">
  Improve security by disabling convenience settings that obscure input
  data&#039;s origin, validity, or integrity. Implicit variable creation and
  unchecked input can lead to vulnerabilities like injection attacks and
  data manipulation.
 </p>
 <p class="para">
  Features like <code class="literal">register_globals</code> and
  <code class="literal">magic_quotes</code> (both removed in PHP 5.4.0) once contributed
  to these risks by automatically creating variables from user input and
  escaping data inconsistently. While no longer in PHP, similar risks persist
  if input handling is mismanaged.
 </p>
 <p class="para">
  Enable <a href="function.error-reporting.php" class="link">error_reporting(E_ALL)</a> to
  help detect uninitialized variables and validate input. Use strict types
  (<a href="language.types.declarations.php#language.types.declarations.strict" class="link">declare(strict_types=1)</a>,
  introduced in PHP 7) to enforce type safety, prevent unintended type conversions,
  and improving overall security.
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/security/variables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity.variables%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security.variables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.variables.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="56715">  <div class="votes">
    <div id="Vu56715">
    <a href="/manual/vote-note.php?id=56715&amp;page=security.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56715">
    <a href="/manual/vote-note.php?id=56715&amp;page=security.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56715" title="65% like this...">
    76
    </div>
  </div>
  <a href="#56715" class="name">
  <strong class="user"><em>Uli Kusterer</em></strong></a><a class="genanchor" href="#56715"> &para;</a><div class="date" title="2005-09-13 03:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56715">
<div class="phpcode"><code><span class="html">One thing I would repeat in the docs here is what information actually comes from the user. Many people think a Cookie, since it's written by PHP, was safe. But the fact is that it's stored on the user's computer, transferred by the user's browser, and thus very easy to manipulate.<br /><br />So, it'd be handy to mention here again that:<br /><br />CGI parameters in the URL, HTTP POST data and cookie variables are considered "user data" and thus need to be validated. Session data and SQL database contents only need to be validated if they came from untrustworthy sources (like the ones just mentioned).<br /><br />Not new, but I would have expected this info under this headline, at least as a short recap plus linlk to the actual docs.</span></code></div>
  </div>
 </div>
  <div class="note" id="80829">  <div class="votes">
    <div id="Vu80829">
    <a href="/manual/vote-note.php?id=80829&amp;page=security.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80829">
    <a href="/manual/vote-note.php?id=80829&amp;page=security.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80829" title="52% like this...">
    6
    </div>
  </div>
  <a href="#80829" class="name">
  <strong class="user"><em>Livingstone@stonyhills[dot]com</em></strong></a><a class="genanchor" href="#80829"> &para;</a><div class="date" title="2008-02-02 04:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80829">
<div class="phpcode"><code><span class="html">making sure your form is submitted from your page! Could also be adapted to url, by additing &amp;token to the query string and checking this against session data(or what ever array you like) with $_GET, not that this string is randomly generated and stored. If you like you could build your own array to store the generated string if you dont want to use $_SESSION, say you could make yours like $tokens = array(), and in your easysecure class you store all the stuff in that array!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">easysecure </span><span class="keyword">{<br />    <br />    var </span><span class="default">$curr_user</span><span class="keyword">;<br />    var </span><span class="default">$curr_permission</span><span class="keyword">;<br />    var </span><span class="default">$curr_task</span><span class="keyword">;<br />    var </span><span class="default">$validpermission</span><span class="keyword">;<br />    var </span><span class="default">$error</span><span class="keyword">;<br />    <br />    <br />    function &amp;</span><span class="default">setVar</span><span class="keyword">( </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">=</span><span class="default">null </span><span class="keyword">) {<br />        if (!</span><span class="default">is_null</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">maketoken</span><span class="keyword">(</span><span class="default">$formname</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">){<br />        <br />        </span><span class="default">$token </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">uniqid</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">));<br />        <br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$formname</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">] = </span><span class="default">$token</span><span class="keyword">;<br />        <br />        return </span><span class="default">$token</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">checktoken</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">, </span><span class="default">$formname</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">){<br />        </span><span class="comment">//print_r($_SESSION);<br />        //echo ($token);<br />        //if we dont have a valid token, return invalid;<br />        </span><span class="keyword">if(!</span><span class="default">$token</span><span class="keyword">){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setVar</span><span class="keyword">(</span><span class="string">'validpermission'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setVar</span><span class="keyword">(</span><span class="string">'error'</span><span class="keyword">, </span><span class="string">'no token found, security bridgedetected'</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="comment">//if we have a valid token check that is is valid<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$formname</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">];<br />        if(</span><span class="default">$key </span><span class="keyword">!== </span><span class="default">$token </span><span class="keyword">){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setVar</span><span class="keyword">(</span><span class="string">'validpermission'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setVar</span><span class="keyword">(</span><span class="string">'error'</span><span class="keyword">, </span><span class="string">'invalid token'</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        <br />        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">validpermission </span><span class="keyword">!==</span><span class="default">1</span><span class="keyword">){<br />              echo </span><span class="string">'invalid Permissions to run this script'</span><span class="keyword">;<br />              return </span><span class="default">false</span><span class="keyword">;    <br />        }else{<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br />    <br />}<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php $userid </span><span class="keyword">= *** </span><span class="comment">//make it what ever id you like </span><span class="default">?&gt;<br /></span>&lt;form name="newform" action="index.php" method="post"&gt;<br />&lt;input type="text" name="potentialeveilfield" value="" size 30 /&gt;<br />&lt;input type="hidden" name="token" value="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">maketoken</span><span class="keyword">(</span><span class="default">newform</span><span class="keyword">, </span><span class="default">$userid</span><span class="keyword">); </span><span class="comment">//$userid here could be user profile id </span><span class="default">?&gt;</span>" /&gt;<br />&lt;input type="submit" /&gt;<br />&lt;/form&gt;<br /><br />Now when processing the form... check the value of your token<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//well you know the form name<br /></span><span class="keyword">if(!</span><span class="default">checktoken</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'token'</span><span class="keyword">], </span><span class="string">'newform'</span><span class="keyword">, </span><span class="default">$userid</span><span class="keyword">))<br />{ </span><span class="comment">//failed<br /></span><span class="keyword">exit(); </span><span class="comment">//or what ever termination and notification method best suits you.<br />//you could also design the class your way to get more accurate fail (error messages from the var) <br /></span><span class="keyword">}<br /><br /></span><span class="comment">//you can now continue with input data clean up (validation)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security.variables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.variables.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="security.php">Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="security.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="security.general.php" title="General considerations">General considerations</a>
                        </li>
                                                <li class="">
                            <a href="security.cgi-bin.php" title="Installed as CGI binary">Installed as CGI binary</a>
                        </li>
                                                <li class="">
                            <a href="security.apache.php" title="Installed as an Apache module">Installed as an Apache module</a>
                        </li>
                                                <li class="">
                            <a href="security.sessions.php" title="Session Security">Session Security</a>
                        </li>
                                                <li class="">
                            <a href="security.filesystem.php" title="Filesystem Security">Filesystem Security</a>
                        </li>
                                                <li class="">
                            <a href="security.database.php" title="Database Security">Database Security</a>
                        </li>
                                                <li class="">
                            <a href="security.errors.php" title="Error Reporting">Error Reporting</a>
                        </li>
                                                <li class="current">
                            <a href="security.variables.php" title="User Submitted Data">User Submitted Data</a>
                        </li>
                                                <li class="">
                            <a href="security.hiding.php" title="Hiding PHP">Hiding PHP</a>
                        </li>
                                                <li class="">
                            <a href="security.current.php" title="Keeping Current">Keeping Current</a>
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
