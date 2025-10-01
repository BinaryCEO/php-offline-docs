<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Prepared statements and stored procedures - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.prepared-statements.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.prepared-statements.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.prepared-statements.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.transactions.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.error-handling.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.prepared-statements.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.prepared-statements.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.prepared-statements.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.prepared-statements.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.prepared-statements.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.prepared-statements.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.prepared-statements.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.prepared-statements.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.prepared-statements.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.prepared-statements.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.prepared-statements.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepared statements and stored procedures" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Prepared statements and stored procedures - Manual" />
<meta name="twitter:description" content="Prepared statements and stored procedures" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Prepared statements and stored procedures - Manual" />
<meta itemprop="description" content="Prepared statements and stored procedures" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepared statements and stored procedures" />

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
        <a href="pdo.error-handling.php">
          Errors and error handling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.transactions.php">
          &laquo; Transactions and auto-commit        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/pdo.prepared-statements.php' selected="selected">English</option>
            <option value='de/pdo.prepared-statements.php'>German</option>
            <option value='es/pdo.prepared-statements.php'>Spanish</option>
            <option value='fr/pdo.prepared-statements.php'>French</option>
            <option value='it/pdo.prepared-statements.php'>Italian</option>
            <option value='ja/pdo.prepared-statements.php'>Japanese</option>
            <option value='pt_BR/pdo.prepared-statements.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.prepared-statements.php'>Russian</option>
            <option value='tr/pdo.prepared-statements.php'>Turkish</option>
            <option value='uk/pdo.prepared-statements.php'>Ukrainian</option>
            <option value='zh/pdo.prepared-statements.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.prepared-statements" class="chapter">
 <h1 class="title">Prepared statements and stored procedures</h1>

 <p class="para">
  Many of the more mature databases support the concept of prepared
  statements.  What are they? They can be thought of as a kind of compiled
  template for the SQL that an application wants to run, that can be customized 
  using variable parameters.  Prepared statements offer two major benefits:
 </p>
 <ul class="itemizedlist">
  <li class="listitem">
   <span class="simpara">
    The query only needs to be parsed (or prepared) once, but can be
    executed multiple times with the same or different parameters. When the
    query is prepared, the database will analyze, compile and optimize its
    plan for executing the query. For complex queries this process can take
    up enough time that it will noticeably slow down an application if there
    is a need to repeat the same query many times with different parameters. By
    using a prepared statement the application avoids repeating the
    analyze/compile/optimize cycle. This means that prepared statements use fewer
    resources and thus run faster.
   </span>
  </li>
  <li class="listitem">
   <span class="simpara">
    The parameters to prepared statements don&#039;t need to be quoted; the
    driver automatically handles this. If an application exclusively uses
    prepared statements, the developer can be sure that no SQL injection will
    occur (however, if other portions of the query are being built up with
    unescaped input, SQL injection is still possible).
   </span>
  </li>
 </ul>
 <p class="para">
  Prepared statements are so useful that they are the only feature that PDO
  will emulate for drivers that don&#039;t support them.  This ensures that an 
  application will be able to use the same data access paradigm regardless of 
  the capabilities of the database.
 </p>
 <p class="para">
  <div class="example" id="example-1117">
   <p><strong>Example #1 Repeated inserts using prepared statements</strong></p>
   <div class="example-contents"><p>
    This example performs an INSERT query by substituting a <code class="literal">name</code>
    and a <code class="literal">value</code> for the named placeholders.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO REGISTRY (name, value) VALUES (:name, :value)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':name'</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':value'</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// insert one row<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'one'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// insert another row with different values<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'two'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1118">
   <p><strong>Example #2 Repeated inserts using prepared statements</strong></p>
   <div class="example-contents"><p>
    This example performs an INSERT query by substituting a <code class="literal">name</code>
    and a <code class="literal">value</code> for the positional <code class="literal">?</code> placeholders.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO REGISTRY (name, value) VALUES (?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// insert one row<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'one'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// insert another row with different values<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'two'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1119">
   <p><strong>Example #3 Fetching data using prepared statements</strong></p>
   <div class="example-contents"><p>
    This example fetches data based on a key value supplied by a form.
    The user input is automatically quoted, so there is no risk of a
    SQL injection attack.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM REGISTRY where name = ?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]]);<br />foreach (</span><span style="color: #0000BB">$stmt </span><span style="color: #007700">as </span><span style="color: #0000BB">$row</span><span style="color: #007700">) {<br />  </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1120">
   <p><strong>Example #4 Calling a stored procedure with an output parameter</strong></p>
   <div class="example-contents"><p>
    If the database driver supports it, an application may also bind parameters for
    output as well as input. Output parameters are typically used to retrieve
    values from stored procedures. Output parameters are slightly more complex
    to use than input parameters, in that a developer must know how large a given
    parameter might be when they bind it. If the value turns out to be larger
    than the size they suggested, an error is raised.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL sp_returns_string(?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$return_value</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">, </span><span style="color: #0000BB">4000</span><span style="color: #007700">); <br /><br /></span><span style="color: #FF8000">// call the stored procedure<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />print </span><span style="color: #DD0000">"procedure returned </span><span style="color: #0000BB">$return_value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1121">
   <p><strong>Example #5 Calling a stored procedure with an input/output parameter</strong></p>
   <div class="example-contents"><p>
    Developers may also specify parameters that hold values both input and output;
    the syntax is similar to output parameters. In this next example, the
    string &#039;hello&#039; is passed into the stored procedure, and when it returns,
    hello is replaced with the return value of the procedure.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL sp_takes_string_returns_string(?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">|</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INPUT_OUTPUT</span><span style="color: #007700">, </span><span style="color: #0000BB">4000</span><span style="color: #007700">); <br /><br /></span><span style="color: #FF8000">// call the stored procedure<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />print </span><span style="color: #DD0000">"procedure returned </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-1122">
   <p><strong>Example #6 Invalid use of placeholder</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM REGISTRY where name LIKE '%?%'"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]]);<br /><br /></span><span style="color: #FF8000">// placeholder must be used in the place of the whole value<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM REGISTRY where name LIKE ?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">"%</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">name</span><span style="color: #007700">]</span><span style="color: #DD0000">%"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/prepared-statements.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.prepared-statements%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.prepared-statements&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.prepared-statements.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97162">  <div class="votes">
    <div id="Vu97162">
    <a href="/manual/vote-note.php?id=97162&amp;page=pdo.prepared-statements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97162">
    <a href="/manual/vote-note.php?id=97162&amp;page=pdo.prepared-statements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97162" title="64% like this...">
    218
    </div>
  </div>
  <a href="#97162" class="name">
  <strong class="user"><em>adam at pyramidpower dot com dot au</em></strong></a><a class="genanchor" href="#97162"> &para;</a><div class="date" title="2010-04-05 06:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97162">
<div class="phpcode"><code><span class="html">Note that when using name parameters with bindParam, the name itself, cannot contain a dash '-'. <br /><br />example:<br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare </span><span class="keyword">(</span><span class="string">"INSERT INTO user (firstname, surname) VALUES (:f-name, :s-name)"</span><span class="keyword">);<br /></span><span class="default">$stmt </span><span class="keyword">-&gt; </span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':f-name'</span><span class="keyword">, </span><span class="string">'John'</span><span class="keyword">);<br /></span><span class="default">$stmt </span><span class="keyword">-&gt; </span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':s-name'</span><span class="keyword">, </span><span class="string">'Smith'</span><span class="keyword">);<br /></span><span class="default">$stmt </span><span class="keyword">-&gt; </span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />The dashes in 'f-name' and 's-name' should be replaced with an underscore or no dash at all.<br /><br />See <a href="http://bugs.php.net/43130" rel="nofollow" target="_blank">http://bugs.php.net/43130</a><br /><br />Adam</span></code></div>
  </div>
 </div>
  <div class="note" id="129287">  <div class="votes">
    <div id="Vu129287">
    <a href="/manual/vote-note.php?id=129287&amp;page=pdo.prepared-statements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129287">
    <a href="/manual/vote-note.php?id=129287&amp;page=pdo.prepared-statements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129287" title="58% like this...">
    3
    </div>
  </div>
  <a href="#129287" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129287"> &para;</a><div class="date" title="2024-02-27 11:30"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129287">
<div class="phpcode"><code><span class="html">Example #5 gives an 1414 wenn tried on MariaDB. Use this function to call a stored procedure with the last parameter as INOUT returning a value like a (uu)id or a count;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * call_sp Call the specified stored procedure with the given parameters.<br /> * The first parameter is the name of the stored procedure.<br /> * The remaining parameters are the (in) parameters to the stored procedure.<br /> * the last (out) parameter should be an int like state or number of affected rows.<br /> *<br /> * @param  mixed $sp_name The name of the stored procedure to call.<br /> * @param  mixed $params The parameters to pass to the stored procedure.<br /> * @return int The number of affected rows.<br /> */<br /></span><span class="keyword">function </span><span class="default">call_sp</span><span class="keyword">( </span><span class="default">\PDO $db</span><span class="keyword">, </span><span class="default">string $sp_name</span><span class="keyword">, ...</span><span class="default">$params </span><span class="keyword">): </span><span class="default">mixed<br /></span><span class="keyword">{<br />  </span><span class="default">$placeholders   </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">( </span><span class="default">0</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">( </span><span class="default">$params </span><span class="keyword">), </span><span class="string">"?" </span><span class="keyword">);<br />  </span><span class="default">$placeholders</span><span class="keyword">[] = </span><span class="string">"@new_id"</span><span class="keyword">;<br /><br />  </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"CALL </span><span class="default">$sp_name</span><span class="string">( " </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">( </span><span class="string">", "</span><span class="keyword">, </span><span class="default">$placeholders </span><span class="keyword">) . </span><span class="string">" ); SELECT @new_id AS `new_id`"</span><span class="keyword">;<br /><br />  try {<br />    </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">debug</span><span class="keyword">( </span><span class="string">"calling Stored Procedure"</span><span class="keyword">, [ </span><span class="string">"sql" </span><span class="keyword">=&gt; </span><span class="default">$sql </span><span class="keyword">] );<br /><br />    </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">( </span><span class="default">$sql </span><span class="keyword">);<br />    </span><span class="default">$i    </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach( </span><span class="default">$params </span><span class="keyword">as </span><span class="default">$param </span><span class="keyword">) {<br />      </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">( ++</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$param </span><span class="keyword">);<br />    }<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />    </span><span class="default">$new_id </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC </span><span class="keyword">)[</span><span class="string">'new_id'</span><span class="keyword">];<br /><br />    return </span><span class="default">$new_id</span><span class="keyword">;<br /><br />  } catch ( </span><span class="default">\Exception $e </span><span class="keyword">) {<br />    </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">( </span><span class="string">"Error calling Stored Procedure"</span><span class="keyword">, [ </span><span class="string">"sql" </span><span class="keyword">=&gt; </span><span class="default">$sql</span><span class="keyword">, </span><span class="string">"params" </span><span class="keyword">=&gt; </span><span class="default">$params</span><span class="keyword">, </span><span class="string">"error" </span><span class="keyword">=&gt; </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() ] );<br />    throw </span><span class="default">$e</span><span class="keyword">;<br />  }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124692">  <div class="votes">
    <div id="Vu124692">
    <a href="/manual/vote-note.php?id=124692&amp;page=pdo.prepared-statements&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124692">
    <a href="/manual/vote-note.php?id=124692&amp;page=pdo.prepared-statements&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124692" title="55% like this...">
    9
    </div>
  </div>
  <a href="#124692" class="name">
  <strong class="user"><em>w37090 at yandex dot ru</em></strong></a><a class="genanchor" href="#124692"> &para;</a><div class="date" title="2020-02-06 06:11"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124692">
<div class="phpcode"><code><span class="html">Insert a multidimensional array into the database through a prepared query:<br />We have an array to write the form:<br /><br />$dataArr:<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; 2020<br />            [1] =&gt; 23<br />            [2] =&gt; 111111<br />        )<br /> <br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; 2020<br />            [1] =&gt; 24<br />            [2] =&gt; 222222222<br />        )<br />....<br /><br />Task: prepare a request and pass through binds<br />$array = [];<br />foreach ($dataArr as $k=&gt;$v) {<br />// $x = 2020, the variable is predetermined in advance, does not change the essence<br />$array[] = [$x, $k, $v];<br />}<br />$sql = ("INSERT INTO `table` (`field`,`field`,`field`) VALUES (?,?,?)");<br /><br />$db-&gt;queryBindInsert($sql,$array);<br /><br />public function queryBindInsert($sql,$bind) {<br />        $stmt = $this-&gt;pdo-&gt;prepare($sql);<br /> <br />        if(count($bind)) {<br />            foreach($bind as $param =&gt; $value) {<br />                $c = 1;<br />                for ($i=0; $i&lt;count($value); $i++) {<br />                    $stmt-&gt;bindValue($c++, $value[$i]);<br />                }<br />                $stmt-&gt;execute();<br />            }<br />        }<br />    }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.prepared-statements&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.prepared-statements.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pdo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="pdo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connections.php" title="Connections and Connection management">Connections and Connection management</a>
                        </li>
                                                <li class="">
                            <a href="pdo.transactions.php" title="Transactions and auto-&#8203;commit">Transactions and auto-&#8203;commit</a>
                        </li>
                                                <li class="current">
                            <a href="pdo.prepared-statements.php" title="Prepared statements and stored procedures">Prepared statements and stored procedures</a>
                        </li>
                                                <li class="">
                            <a href="pdo.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="">
                            <a href="pdo.lobs.php" title="Large Objects (LOBs)">Large Objects (LOBs)</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo.php" title="PDO">PDO</a>
                        </li>
                                                <li class="">
                            <a href="class.pdostatement.php" title="PDOStatement">PDOStatement</a>
                        </li>
                                                <li class="">
                            <a href="class.pdorow.php" title="PDORow">PDORow</a>
                        </li>
                                                <li class="">
                            <a href="class.pdoexception.php" title="PDOException">PDOException</a>
                        </li>
                                                <li class="">
                            <a href="pdo.drivers.php" title="PDO Drivers">PDO Drivers</a>
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
