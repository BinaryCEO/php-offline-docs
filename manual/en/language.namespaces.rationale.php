<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Overview - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.rationale.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.rationale">
 <link rel="alternate" href="https://www.php.net/namespaces.rationale" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.definition.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.rationale.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.rationale.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.rationale.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.rationale.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.rationale.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.rationale.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.rationale.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.rationale.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.rationale.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.rationale.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.rationale.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Namespaces overview" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Overview - Manual" />
<meta name="twitter:description" content="Namespaces overview" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Overview - Manual" />
<meta itemprop="description" content="Namespaces overview" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Namespaces overview" />

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
        <a href="language.namespaces.definition.php">
          Namespaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.php">
          &laquo; Namespaces        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.namespaces.php'>Namespaces</a></li>      </ul>
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
            <option value='en/language.namespaces.rationale.php' selected="selected">English</option>
            <option value='de/language.namespaces.rationale.php'>German</option>
            <option value='es/language.namespaces.rationale.php'>Spanish</option>
            <option value='fr/language.namespaces.rationale.php'>French</option>
            <option value='it/language.namespaces.rationale.php'>Italian</option>
            <option value='ja/language.namespaces.rationale.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.rationale.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.rationale.php'>Russian</option>
            <option value='tr/language.namespaces.rationale.php'>Turkish</option>
            <option value='uk/language.namespaces.rationale.php'>Ukrainian</option>
            <option value='zh/language.namespaces.rationale.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.rationale" class="sect1">
  <h2 class="title">Namespaces overview</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="simpara">
   What are namespaces? In the broadest definition namespaces are a way of encapsulating
   items. This can be seen as an abstract concept in many places. For example, in any
   operating system directories serve to group related files, and act as a namespace for
   the files within them. As a concrete example, the file <code class="literal">foo.txt</code> can
   exist in both directory <code class="literal">/home/greg</code> and in <code class="literal">/home/other</code>,
   but two copies of <code class="literal">foo.txt</code> cannot co-exist in the same directory. In
   addition, to access the <code class="literal">foo.txt</code> file outside of the
   <code class="literal">/home/greg</code> directory, we must prepend the directory name to the file
   name using the directory separator to get <code class="literal">/home/greg/foo.txt</code>. This
   same principle extends to namespaces in the programming world.
  </p>

  <p class="simpara">
   In the PHP world, namespaces are designed to solve two problems that authors
   of libraries and applications encounter when creating re-usable code elements
   such as classes or functions:
  </p>
  <p class="para">
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      Name collisions between code you create, and
      internal PHP classes/functions/constants or third-party classes/functions/constants.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem,
      improving readability of source code.
     </span>
    </li>
   </ol>
  </p>
  <p class="simpara">
   PHP Namespaces provide a way in which to group related classes, interfaces,
   functions and constants. Here is an example of namespace syntax in PHP:
  </p>
  <div class="example" id="example-372">
   <p><strong>Example #1 Namespace syntax example</strong></p>
   <div class="example-contents">
   <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">my\name</span><span style="color: #007700">; </span><span style="color: #FF8000">// see "Defining Namespaces" section<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{}<br />function </span><span style="color: #0000BB">myfunction</span><span style="color: #007700">() {}<br />const </span><span style="color: #0000BB">MYCONST </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">\my\name\MyClass</span><span style="color: #007700">; </span><span style="color: #FF8000">// see "Global Space" section<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">'hi'</span><span style="color: #007700">); </span><span style="color: #FF8000">// see "Using namespaces: fallback to global<br />                   // function/constant" section<br /><br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">namespace\MYCONST</span><span style="color: #007700">; </span><span style="color: #FF8000">// see "namespace operator and __NAMESPACE__<br />                        // constant" section<br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">__NAMESPACE__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'\MYCONST'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">); </span><span style="color: #FF8000">// see "Namespaces and dynamic language features" section<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Namespace names are case-insensitive.
    </span>
   </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The Namespace name <code class="literal">PHP</code>, and compound names starting
    with this name (like <code class="literal">PHP\Classes</code>) are reserved for internal language use
    and should not be used in the userspace code.
   </p>
  </p></blockquote>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.rationale%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.rationale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.rationale.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102662">  <div class="votes">
    <div id="Vu102662">
    <a href="/manual/vote-note.php?id=102662&amp;page=language.namespaces.rationale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102662">
    <a href="/manual/vote-note.php?id=102662&amp;page=language.namespaces.rationale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102662" title="79% like this...">
    899
    </div>
  </div>
  <a href="#102662" class="name">
  <strong class="user"><em>SteveWa</em></strong></a><a class="genanchor" href="#102662"> &para;</a><div class="date" title="2011-02-27 08:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102662">
<div class="phpcode"><code><span class="html">Thought this might help other newbies like me...<br /><br />Name collisions means: <br />you create a function named db_connect, and somebody elses code that you use in your file (i.e. an include) has the same function with the same name.<br /><br />To get around that problem, you rename your function SteveWa_db_connect  which makes your code longer and harder to read.<br /><br />Now you can use namespaces to keep your function name separate from anyone else's function name, and you won't have to make extra_long_named functions to get around the name collision problem.<br /><br />So a namespace is like a pointer to a file path where you can find the source of the function you are working with</span></code></div>
  </div>
 </div>
  <div class="note" id="104196">  <div class="votes">
    <div id="Vu104196">
    <a href="/manual/vote-note.php?id=104196&amp;page=language.namespaces.rationale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104196">
    <a href="/manual/vote-note.php?id=104196&amp;page=language.namespaces.rationale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104196" title="73% like this...">
    297
    </div>
  </div>
  <a href="#104196" class="name">
  <strong class="user"><em>Dmitry Snytkine</em></strong></a><a class="genanchor" href="#104196"> &para;</a><div class="date" title="2011-05-31 06:54"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104196">
<div class="phpcode"><code><span class="html">Just a note: namespace (even nested or sub-namespace) cannot be just a number, it must start with a letter.<br />For example, lets say you want to use namespace for versioning of your packages or versioning of your API:<br /><br />namespace Mynamespace\1;  // Illegal<br />Instead use this:<br />namespace Mynamespace\v1; // OK</span></code></div>
  </div>
 </div>
  <div class="note" id="116280">  <div class="votes">
    <div id="Vu116280">
    <a href="/manual/vote-note.php?id=116280&amp;page=language.namespaces.rationale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116280">
    <a href="/manual/vote-note.php?id=116280&amp;page=language.namespaces.rationale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116280" title="71% like this...">
    178
    </div>
  </div>
  <a href="#116280" class="name">
  <strong class="user"><em>pierstoval at gmail dot com</em></strong></a><a class="genanchor" href="#116280"> &para;</a><div class="date" title="2014-12-05 10:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116280">
<div class="phpcode"><code><span class="html">To people coming here by searching about namespaces, know that a consortium has studied about best practices in PHP, in order to allow developers to have common coding standards.<br /> <br />These best practices are called "PHP Standard Recommendations" , also known as PSR.<br /> <br />They are visible on this link : <a href="http://www.php-fig.org/psr" rel="nofollow" target="_blank">http://www.php-fig.org/psr</a><br /> <br />Actually there are 5 coding standards categories : <br />PSR-0 : Autoloading Standard , which goal is to make the use of Namespaces easier, in order to convert a namespace into a file path.<br />PSR-1 : Basic Coding Standard , basically, standards :) <br />PSR-2 : Coding Style Guide, where to put braces, how to write a class, etc.<br />PSR-3 : Logger Interface , how to write a standard logger<br />PSR-4 : Improved Autoloading , to resolve more Namespaces into paths.<br /> <br />The ones I want to point are PSR-0 and PSR-4 : they use namespaces to resolve a FQCN (Fully qualified class name = full namespace + class name) into a file path. <br />Basic example, you have this directory structure :<br />./src/Pierstoval/Tools/MyTool.php<br /><br />The namespacing PSR-0 or PSR-4 standard tells that you can transform this path into a FQCN.<br />Read the principles of autoload if you need to know what it means, because it's almost mandatory ;) .<br /><br />Structure :<br />{path}/autoloader.php<br />{path}/index.php<br />{path}/src/Pierstoval/Tools/MyTool.php<br /><br />Files :<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// {path}/index.php<br />    </span><span class="keyword">include </span><span class="string">'autoloader.php'</span><span class="keyword">;<br />    </span><span class="default">$tool </span><span class="keyword">= new </span><span class="default">Pierstoval</span><span class="keyword">/</span><span class="default">Tools</span><span class="keyword">/</span><span class="default">MyTool</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br />    </span><span class="comment">// {path}/src/Pierstoval/Tools/MyTool.php<br />    </span><span class="keyword">namespace </span><span class="default">Pierstoval\Tools</span><span class="keyword">;<br />    class </span><span class="default">MyTool </span><span class="keyword">{}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br />    </span><span class="comment">// {path}/autoloader.php<br />    </span><span class="keyword">function </span><span class="default">loadClass</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">) {<br />        </span><span class="default">$fileName </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$namespace </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />        </span><span class="comment">// Sets the include path as the "src" directory<br />        </span><span class="default">$includePath </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">.</span><span class="string">'src'</span><span class="keyword">;<br /><br />        if (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$lastNsPos </span><span class="keyword">= </span><span class="default">strripos</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">))) {<br />            </span><span class="default">$namespace </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$lastNsPos</span><span class="keyword">);<br />            </span><span class="default">$className </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">$lastNsPos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$fileName </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$namespace</span><span class="keyword">) . </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;<br />        }<br />        </span><span class="default">$fileName </span><span class="keyword">.= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'_'</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$className</span><span class="keyword">) . </span><span class="string">'.php'</span><span class="keyword">;<br />        </span><span class="default">$fullFileName </span><span class="keyword">= </span><span class="default">$includePath </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$fileName</span><span class="keyword">;<br />        <br />        if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fullFileName</span><span class="keyword">)) {<br />            require </span><span class="default">$fullFileName</span><span class="keyword">;<br />        } else {<br />            echo </span><span class="string">'Class "'</span><span class="keyword">.</span><span class="default">$className</span><span class="keyword">.</span><span class="string">'" does not exist.'</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'loadClass'</span><span class="keyword">); </span><span class="comment">// Registers the autoloader<br /></span><span class="default">?&gt;<br /></span> <br />A standardized autoloader will get the class you want to instanciate (MyTool) and get the FQCN, transform it into a file path, and check if the file exists. If it does, it will <span class="default">&lt;?php </span><span class="keyword">include(); </span><span class="default">?&gt;</span> it, and if you wrote your class correctly, the class will be available within its correct namespace.<br />Then, if you have the following code :<br /><span class="default">&lt;?php $tool </span><span class="keyword">= new </span><span class="default">Pierstoval</span><span class="keyword">/</span><span class="default">Tools</span><span class="keyword">/</span><span class="default">MyTool</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span>The autoloader will transform the FQCN into this path :<br />{path}/src/Pierstoval/Tools/MyTool.php<br /><br />This might be the best practices ever in PHP framework developments, such as Symfony or others.</span></code></div>
  </div>
 </div>
  <div class="note" id="126073">  <div class="votes">
    <div id="Vu126073">
    <a href="/manual/vote-note.php?id=126073&amp;page=language.namespaces.rationale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126073">
    <a href="/manual/vote-note.php?id=126073&amp;page=language.namespaces.rationale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126073" title="73% like this...">
    28
    </div>
  </div>
  <a href="#126073" class="name">
  <strong class="user"><em>shewa12kpi at gmail dot com</em></strong></a><a class="genanchor" href="#126073"> &para;</a><div class="date" title="2021-05-12 04:39"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126073">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Here is the simple use case of namespace. See how we can use same named class with the help of namespace. This is how namespace resolve naming collision.<br /><br /></span><span class="keyword">namespace </span><span class="default">Mobile</span><span class="keyword">;<br /><br />class </span><span class="default">User <br /></span><span class="keyword">{<br /><br />    public </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'mobile user'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$user </span><span class="keyword">= new </span><span class="default">\Mobile\User</span><span class="keyword">;<br />echo </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br /><br />namespace </span><span class="default">TV </span><span class="keyword">;<br /><br />class </span><span class="default">User <br /></span><span class="keyword">{<br />    public static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'tv user'</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">\TV\User</span><span class="keyword">::</span><span class="default">$name</span><span class="keyword">;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.rationale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.rationale.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definition.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nested.php" title="Sub-&#8203;namespaces">Sub-&#8203;namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definitionmultiple.php" title="Defining multiple namespaces in the same file">Defining multiple namespaces in the same file</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.dynamic.php" title="Namespaces and dynamic language features">Namespaces and dynamic language features</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nsconstants.php" title="namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;">namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.rules.php" title="Name resolution rules">Name resolution rules</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.faq.php" title="FAQ">FAQ</a>
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
