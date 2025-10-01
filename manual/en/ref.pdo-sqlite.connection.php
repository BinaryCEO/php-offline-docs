<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO_SQLITE DSN - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-sqlite.connection.php">
 <link rel="shorturl" href="https://www.php.net/pdo-sqlite.connection">
 <link rel="alternate" href="https://www.php.net/pdo-sqlite.connection" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pdo-sqlite.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.pdo-sqlite.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.sqlitecreateaggregate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-sqlite.connection.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-sqlite.connection.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-sqlite.connection.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-sqlite.connection.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-sqlite.connection.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-sqlite.connection.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-sqlite.connection.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-sqlite.connection.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-sqlite.connection.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-sqlite.connection.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-sqlite.connection.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connecting to SQLite databases" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO_SQLITE DSN - Manual" />
<meta name="twitter:description" content="Connecting to SQLite databases" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO_SQLITE DSN - Manual" />
<meta itemprop="description" content="Connecting to SQLite databases" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connecting to SQLite databases" />

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
        <a href="pdo.sqlitecreateaggregate.php">
          PDO::sqliteCreateAggregate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.pdo-sqlite.php">
          &laquo; SQLite PDO Driver        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='pdo.drivers.php'>PDO Drivers</a></li>      <li><a href='ref.pdo-sqlite.php'>SQLite PDO Driver</a></li>      </ul>
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
            <option value='en/ref.pdo-sqlite.connection.php' selected="selected">English</option>
            <option value='de/ref.pdo-sqlite.connection.php'>German</option>
            <option value='es/ref.pdo-sqlite.connection.php'>Spanish</option>
            <option value='fr/ref.pdo-sqlite.connection.php'>French</option>
            <option value='it/ref.pdo-sqlite.connection.php'>Italian</option>
            <option value='ja/ref.pdo-sqlite.connection.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-sqlite.connection.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-sqlite.connection.php'>Russian</option>
            <option value='tr/ref.pdo-sqlite.connection.php'>Turkish</option>
            <option value='uk/ref.pdo-sqlite.connection.php'>Ukrainian</option>
            <option value='zh/ref.pdo-sqlite.connection.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-sqlite.connection" class="refentry">
   <div class="refnamediv">
    <h1 class="refname">PDO_SQLITE DSN</h1>
    <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PECL PDO_SQLITE &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">PDO_SQLITE DSN</span> &mdash; <span class="dc-title">Connecting to SQLite databases</span></p>

   </div>

   <div class="refsect1 description" id="refsect1-ref.pdo-sqlite.connection-description">
    <h3 class="title">Description</h3>
    <p class="para">
     The PDO_SQLITE Data Source Name (DSN) is composed of the following elements:
     <dl>
      
       <dt>DSN prefix (SQLite 3)</dt>
       <dd>
        <p class="para">
         The DSN prefix is <strong class="userinput"><code>sqlite:</code></strong>.
         <ul class="itemizedlist">
          <li class="listitem">
           <p class="para">
            To access a database on disk, the absolute path has to be appended to the
            DSN prefix.
           </p>
          </li>
          <li class="listitem">
           <p class="para">
            To create a database in memory, <code class="literal">:memory:</code> has to be appended
            to the DSN prefix.
           </p>
          </li>
          <li class="listitem">
           <p class="para">
            If the DSN consists of the DSN prefix only, a temporary database is used,
            which is deleted when the connection is closed.
           </p>
          </li>
         </ul>
        </p>
       </dd>
      
     </dl>
    </p>
   </div>

   <div class="refsect1 examples" id="refsect1-ref.pdo-sqlite.connection-examples">
    <h3 class="title">Examples</h3>
    <p class="para">
     <div class="example" id="example-1207">
      <p><strong>Example #1 PDO_SQLITE DSN examples</strong></p>
      <div class="example-contents"><p>
       The following examples show PDO_SQLITE DSN for connecting to
       SQLite databases:
       <div class="example-contents">
<div class="cdata"><pre>
sqlite:/opt/databases/mydb.sq3
sqlite::memory:
sqlite:
</pre></div>
       </div>

      </p></div>
     </div>
    </p>
   </div>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_sqlite/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-sqlite.connection%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-sqlite.connection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-sqlite.connection.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105350">  <div class="votes">
    <div id="Vu105350">
    <a href="/manual/vote-note.php?id=105350&amp;page=ref.pdo-sqlite.connection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105350">
    <a href="/manual/vote-note.php?id=105350&amp;page=ref.pdo-sqlite.connection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105350" title="70% like this...">
    26
    </div>
  </div>
  <a href="#105350" class="name">
  <strong class="user"><em>frederic dot glorieux at diple dot net</em></strong></a><a class="genanchor" href="#105350"> &para;</a><div class="date" title="2011-08-10 03:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105350">
<div class="phpcode"><code><span class="html">In memory sqlite has some limitations. The memory space could be the request, the session, but no way seems documented to share a base in memory among users.
<br />
<br />For a request, open your base with the code
<br />$pdo = new PDO( 'sqlite::memory:');
<br />and your base will disapear on next request.
<br />
<br />For session persistency
<br /><span class="default">&lt;?php
<br />$pdo </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(
<br />    </span><span class="string">'sqlite::memory:'</span><span class="keyword">,
<br />    </span><span class="default">null</span><span class="keyword">,
<br />    </span><span class="default">null</span><span class="keyword">,
<br />    array(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_PERSISTENT </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">)
<br />);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82656">  <div class="votes">
    <div id="Vu82656">
    <a href="/manual/vote-note.php?id=82656&amp;page=ref.pdo-sqlite.connection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82656">
    <a href="/manual/vote-note.php?id=82656&amp;page=ref.pdo-sqlite.connection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82656" title="62% like this...">
    9
    </div>
  </div>
  <a href="#82656" class="name">
  <strong class="user"><em>Fatmoon</em></strong></a><a class="genanchor" href="#82656"> &para;</a><div class="date" title="2008-04-20 07:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82656">
<div class="phpcode"><code><span class="html">It seems that the directory that contains your sqlite database must be writeable by the web server. Making just the file writeable won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="118909">  <div class="votes">
    <div id="Vu118909">
    <a href="/manual/vote-note.php?id=118909&amp;page=ref.pdo-sqlite.connection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118909">
    <a href="/manual/vote-note.php?id=118909&amp;page=ref.pdo-sqlite.connection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118909" title="66% like this...">
    3
    </div>
  </div>
  <a href="#118909" class="name">
  <strong class="user"><em>casteele  at  g-m-a-i-l ( dot ) c-o-m</em></strong></a><a class="genanchor" href="#118909"> &para;</a><div class="date" title="2016-02-25 10:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118909">
<div class="phpcode"><code><span class="html">Some notes that may or may not be obvious..<br /><br />In general, when using an in-memory (:memory:) database from within a PHP script (such as code in an index.php file for a web server), the memory used for the database exists only as long as the PHP code is running. Usually, this is only as long as it takes to deliver output back to the web server trying to serve the web page to the client. There is no way (that I know of, please correct me if I'm wrong) to share an in-memory database across different web connections, including different multiple connections from the same client. *This does include "persistent" connections.* The reason for this is because in-memory databases *are* in-memory databases, and the memory allocated by the web server/PHP processor is allocated and released "on the fly". Otherwise, web servers which serve thousands of web pages would quickly consume all available memory (and swap space), and come to a grinding halt when the system no longer has available memory to handle more requests.<br /><br />If you need to share data across sessions, connections, or scripts, you'll need to use a database file in a folder/directory which is *writable* by the web server/PHP extension, as SQLite3 may use some temporary files while working with the database. (In my Debian Linux installation, this is the "www-data" psuedo-user/group.) (You can consult the SQLite3 documentation if you wish to know what temporary files it uses; They are well-documented.)<br /><br />In short, it is a _logical_error_ to think of in-memory databases as anything other than very short-term temporary databases. They may be useful if you only wish to work with a subset of a larger database within *a single web page, AND only while the PHP script is generating the web page*. That is, you cannot use in-memory databases to store a user's "shopping cart", for example, because a shopping cart would still need to load many different web pages, invoking many different PHP scripts, each with their own memory space. Likewise, once PHP has generated the output of the web page for the server to send on to the client, PHP is no longer "part of the picture", and any memory it had allocated may be freed for other uses--including your in-memory database.<br /><br />This is not a limitation of the web server, PHP, or SQLite, but of how operating systems work in general to share limited resources (such as memory) between processes/users/connections/et cetera.</span></code></div>
  </div>
 </div>
  <div class="note" id="70827">  <div class="votes">
    <div id="Vu70827">
    <a href="/manual/vote-note.php?id=70827&amp;page=ref.pdo-sqlite.connection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70827">
    <a href="/manual/vote-note.php?id=70827&amp;page=ref.pdo-sqlite.connection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70827" title="61% like this...">
    7
    </div>
  </div>
  <a href="#70827" class="name">
  <strong class="user"><em>rick</em></strong></a><a class="genanchor" href="#70827"> &para;</a><div class="date" title="2006-10-30 10:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70827">
<div class="phpcode"><code><span class="html">Don't forget "extension=php_pdo_sqlite.dll" has to be enabled in php.ini (if you use xampp is will be disabled by default) .</span></code></div>
  </div>
 </div>
  <div class="note" id="82670">  <div class="votes">
    <div id="Vu82670">
    <a href="/manual/vote-note.php?id=82670&amp;page=ref.pdo-sqlite.connection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82670">
    <a href="/manual/vote-note.php?id=82670&amp;page=ref.pdo-sqlite.connection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82670" title="63% like this...">
    5
    </div>
  </div>
  <a href="#82670" class="name">
  <strong class="user"><em>FST777</em></strong></a><a class="genanchor" href="#82670"> &para;</a><div class="date" title="2008-04-21 05:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82670">
<div class="phpcode"><code><span class="html">@ Fatmoon<br />That is correct. SQLite sometimes uses additional files in the same folder while writing to the DB. These files can sometimes be seen and usually contain the name of your DB and the word 'journal' in their filename.<br />Security wise, it might be a good idea to store the SQLite databases in a seperate folder to shield the rest from user www.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-sqlite.connection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-sqlite.connection.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pdo-sqlite.php">SQLite PDO Driver</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="ref.pdo-sqlite.connection.php" title="PDO_&#8203;SQLITE DSN">PDO_&#8203;SQLITE DSN</a>
                        </li>
                                                <li class="">
                            <a href="pdo.sqlitecreateaggregate.php" title="sqliteCreateAggregate">sqliteCreateAggregate</a>
                        </li>
                                                <li class="">
                            <a href="pdo.sqlitecreatecollation.php" title="sqliteCreateCollation">sqliteCreateCollation</a>
                        </li>
                                                <li class="">
                            <a href="pdo.sqlitecreatefunction.php" title="sqliteCreateFunction">sqliteCreateFunction</a>
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
