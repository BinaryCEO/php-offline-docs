<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SQL Injection - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.database.sql-injection.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.database.sql-injection.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.database.sql-injection.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/security.database.php">
 <link rel="prev" href="https://www.php.net/manual/en/security.database.storage.php">
 <link rel="next" href="https://www.php.net/manual/en/security.errors.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.database.sql-injection.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.database.sql-injection.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.database.sql-injection.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.database.sql-injection.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.database.sql-injection.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.database.sql-injection.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.database.sql-injection.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.database.sql-injection.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.database.sql-injection.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.database.sql-injection.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.database.sql-injection.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SQL Injection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SQL Injection - Manual" />
<meta name="twitter:description" content="SQL Injection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SQL Injection - Manual" />
<meta itemprop="description" content="SQL Injection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SQL Injection" />

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
        <a href="security.errors.php">
          Error Reporting &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="security.database.storage.php">
          &laquo; Encrypted Storage Model        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='security.php'>Security</a></li>      <li><a href='security.database.php'>Database Security</a></li>      </ul>
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
            <option value='en/security.database.sql-injection.php' selected="selected">English</option>
            <option value='de/security.database.sql-injection.php'>German</option>
            <option value='es/security.database.sql-injection.php'>Spanish</option>
            <option value='fr/security.database.sql-injection.php'>French</option>
            <option value='it/security.database.sql-injection.php'>Italian</option>
            <option value='ja/security.database.sql-injection.php'>Japanese</option>
            <option value='pt_BR/security.database.sql-injection.php'>Brazilian Portuguese</option>
            <option value='ru/security.database.sql-injection.php'>Russian</option>
            <option value='tr/security.database.sql-injection.php'>Turkish</option>
            <option value='uk/security.database.sql-injection.php'>Ukrainian</option>
            <option value='zh/security.database.sql-injection.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security.database.sql-injection" class="sect1">
    <h2 class="title">SQL Injection</h2>
    <p class="simpara">
     SQL injection is a technique where an attacker exploits flaws in
     application code responsible for building dynamic SQL queries.
     The attacker can gain access to privileged sections of the application,
     retrieve all information from the database, tamper with existing data,
     or even execute dangerous system-level commands on the database
     host. The vulnerability occurs when developers concatenate or
     interpolate arbitrary input in their SQL statements.
    </p>
    <p class="para">
     <div class="example" id="example-519">
      <p><strong>Example #1 
       Splitting the result set into pages ... and making superusers
       (PostgreSQL)
      </strong></p>
      <div class="example-contents"><p>
       In the following example, user input is directly interpolated into the
       SQL query allowing the attacker to gain a superuser account in the database.
      </p></div>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$offset </span><span style="color: #007700">= </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// beware, no input validation!<br /></span><span style="color: #0000BB">$query  </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET </span><span style="color: #0000BB">$offset</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
      Normal users click on the &#039;next&#039;, &#039;prev&#039; links where the <var class="varname">$offset</var>
      is encoded into the <abbr title="Uniform Resource Locator">URL</abbr>. The script expects that the incoming
      <var class="varname">$offset</var> is a number. However, what if someone tries to
      break in by appending the following to the <abbr title="Uniform Resource Locator">URL</abbr>
      <div class="informalexample">
       <div class="example-contents">
<div class="sqlcode"><pre class="sqlcode">0;
insert into pg_shadow(usename,usesysid,usesuper,usecatupd,passwd)
    select &#039;crack&#039;, usesysid, &#039;t&#039;,&#039;t&#039;,&#039;crack&#039;
    from pg_shadow where usename=&#039;postgres&#039;;
--</pre>
</div>
       </div>

      </div>
      If it happened, the script would present a superuser access to the attacker.
      Note that <code class="literal">0;</code> is to supply a valid offset to the
      original query and to terminate it.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      It is a common technique to force the SQL parser to ignore the rest of the
      query written by the developer with <code class="literal">--</code> which is the
      comment sign in SQL.
     </p>
    </p></blockquote>
    <p class="para">
     A feasible way to gain passwords is to circumvent your search result pages.
     The only thing the attacker needs to do is to see if there are any submitted variables
     used in SQL statements which are not handled properly. These filters can be set
     commonly in a preceding form to customize <code class="literal">WHERE, ORDER BY,
     LIMIT</code> and <code class="literal">OFFSET</code> clauses in <code class="literal">SELECT</code>
     statements. If your database supports the <code class="literal">UNION</code> construct,
     the attacker may try to append an entire query to the original one to list
     passwords from an arbitrary table. It is strongly recommended to store only
     secure hashes of passwords instead of the passwords themselves.
     <div class="example" id="example-520">
      <p><strong>Example #2 
       Listing out articles ... and some passwords (any database server)
      </strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$query  </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT id, name, inserted, size FROM products<br />           WHERE size = '</span><span style="color: #0000BB">$size</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     The static part of the query can be combined with another
     <code class="literal">SELECT</code> statement which reveals all passwords:
     <div class="informalexample">
      <div class="example-contents">
<div class="sqlcode"><pre class="sqlcode">&#039;
union select &#039;1&#039;, concat(uname||&#039;-&#039;||passwd) as name, &#039;1971-01-01&#039;, &#039;0&#039; from usertable;
--</pre>
</div>
      </div>

     </div>
    </p>
    <p class="para">
     <code class="literal">UPDATE</code> and <code class="literal">INSERT</code> statements are also
     susceptible to such attacks.
     <div class="example" id="example-521">
     <p><strong>Example #3 
      From resetting a password ... to gaining more privileges (any database server)
     </strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE usertable SET pwd='</span><span style="color: #0000BB">$pwd</span><span style="color: #DD0000">' WHERE uid='</span><span style="color: #0000BB">$uid</span><span style="color: #DD0000">';"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     If a malicious user submits the value
     <code class="literal">&#039; or uid like&#039;%admin%</code> to <var class="varname">$uid</var> to
     change the admin&#039;s password, or simply sets <var class="varname">$pwd</var> to
     <code class="literal">hehehe&#039;, trusted=100, admin=&#039;yes</code> to gain more 
     privileges, then the query will be twisted:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// $uid: ' or uid like '%admin%<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE usertable SET pwd='...' WHERE uid='' or uid like '%admin%';"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// $pwd: hehehe', trusted=100, admin='yes<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE usertable SET pwd='hehehe', trusted=100, admin='yes' WHERE<br />...;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="simpara">
     While it remains obvious that an attacker must possess at least some
     knowledge of the database architecture to conduct a successful
     attack, obtaining this information is often very simple. For example,
     the code may be part of an open-source software and be publicly available.
     This information may also be divulged
     by closed-source code - even if it&#039;s encoded, obfuscated, or compiled -
     and even by your own code through the display of error messages.
     Other methods include the use of typical table and column names.  For
     example, a login form that uses a &#039;users&#039; table with column names
     &#039;id&#039;, &#039;username&#039;, and &#039;password&#039;.
    </p>
    <p class="para">
     <div class="example" id="example-522">
     <p><strong>Example #4 Attacking the database host operating system (MSSQL Server)</strong></p>
      <div class="example-contents"><p>
       A frightening example of how operating system-level commands can be
       accessed on some database hosts.
      </p></div>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$query  </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM products WHERE id LIKE '%</span><span style="color: #0000BB">$prod</span><span style="color: #DD0000">%'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mssql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     If attacker submits the value
     <code class="literal">a%&#039; exec master..xp_cmdshell &#039;net user test testpass /ADD&#039; --</code>
     to <var class="varname">$prod</var>, then the <var class="varname">$query</var> will be:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$query  </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM products<br />           WHERE id LIKE '%a%'<br />           exec master..xp_cmdshell 'net user test testpass /ADD' --%'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mssql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
     MSSQL Server executes the SQL statements in the batch including a command
     to add a new user to the local accounts database. If this application
     were running as <code class="literal">sa</code> and the MSSQLSERVER service was
     running with sufficient privileges, the attacker would now have an
     account with which to access this machine.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Some examples above are tied to a specific database server, but it
      does not mean that a similar attack is impossible against other products.
      Your database server may be similarly vulnerable in another manner.
     </p>
    </p></blockquote>
    <p class="para">
     <div class="mediaobject">
      
      <div class="imageobject">
       <img src="images/fa7c5b5f326e3c4a6cc9db19e7edbaf0-xkcd-bobby-tables.png" alt="A funny example of the issues regarding SQL injection" width="666" height="205" />
      </div>
      <div class="caption">
       <p class="simpara">
        Image courtesy of <a href="http://xkcd.com/327" class="link external">&raquo;&nbsp;xkcd</a>
       </p>
      </div>
     </div>
    </p>

    <div class="sect2" id="security.database.avoiding">
     <h3 class="title">Avoidance Techniques</h3>
     <p class="para">
      The recommended way to avoid SQL injection is by binding all data via
      prepared statements. Using parameterized queries isn&#039;t enough to entirely
      avoid SQL injection, but it is the easiest and safest way to provide input
      to SQL statements. All dynamic data literals in <code class="literal">WHERE</code>,
      <code class="literal">SET</code>, and <code class="literal">VALUES</code> clauses must be
      replaced with placeholders. The actual data will be bound during the
      execution and sent separately from the SQL command.
     </p>
     <p class="para">
      Parameter binding can only be used for data. Other dynamic parts of the
      SQL query must be filtered against a known list of allowed values.
     </p>
     <p class="para">
      <div class="example" id="example-523">
      <p><strong>Example #5 Avoiding SQL injection by using PDO prepared statements</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// The dynamic SQL part is validated against expected values<br /></span><span style="color: #0000BB">$sortingOrder </span><span style="color: #007700">= </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'sortingOrder'</span><span style="color: #007700">] === </span><span style="color: #DD0000">'DESC' </span><span style="color: #007700">? </span><span style="color: #DD0000">'DESC' </span><span style="color: #007700">: </span><span style="color: #DD0000">'ASC'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$productId </span><span style="color: #007700">= </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'productId'</span><span style="color: #007700">];<br /></span><span style="color: #FF8000">// The SQL is prepared with a placeholder<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM products WHERE id LIKE ? ORDER BY price </span><span style="color: #007700">{</span><span style="color: #0000BB">$sortingOrder</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// The value is provided with LIKE wildcards<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">"%</span><span style="color: #007700">{</span><span style="color: #0000BB">$productId</span><span style="color: #007700">}</span><span style="color: #DD0000">%"</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </p>

     <p class="simpara">
      Prepared statements are provided
      <a href="pdo.prepared-statements.php" class="link">by PDO</a>,
      <a href="mysqli.quickstart.prepared-statements.php" class="link">by MySQLi</a>,
      and by other database libraries.
     </p>

     <p class="simpara">
      SQL injection attacks are mainly based on exploiting the code not being written
      with security in mind. Never trust any input, especially
      from the client side, even though it comes from a select box,
      a hidden input field, or a cookie. The first example shows that such a
      simple query can cause disasters.
     </p>

     <p class="para">
      A defense-in-depth strategy involves several good coding practices:
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         Never connect to the database as a superuser or as the database owner.
         Use always customized users with minimal privileges.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Check if the given input has the expected data type. <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> has
         a wide range of input validating functions, from the simplest ones
         found in <a href="ref.var.php" class="link">Variable Functions</a> and
         in <a href="ref.ctype.php" class="link">Character Type Functions</a>
         (e.g. <span class="function"><a href="function.is-numeric.php" class="function">is_numeric()</a></span>, <span class="function"><a href="function.ctype-digit.php" class="function">ctype_digit()</a></span>
         respectively) and onwards to the
         <a href="ref.pcre.php" class="link">Perl Compatible Regular Expressions</a>
         support.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         If the application expects numerical input, consider verifying data
         with <span class="function"><a href="function.ctype-digit.php" class="function">ctype_digit()</a></span>, silently change its type
         using <span class="function"><a href="function.settype.php" class="function">settype()</a></span>, or use its numeric representation
         by <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         If the database layer doesn&#039;t support binding variables then
         quote each non-numeric user-supplied value that is passed to the
         database with the database-specific string escape function (e.g.
         <span class="function"><a href="function.mysql-real-escape-string.php" class="function">mysql_real_escape_string()</a></span>,
         <span class="function"><strong>sqlite_escape_string()</strong></span>, etc.).
         Generic functions like <span class="function"><a href="function.addslashes.php" class="function">addslashes()</a></span> are useful only
         in a very specific environment (e.g. MySQL in a single-byte character
         set with disabled <var class="varname">NO_BACKSLASH_ESCAPES</var>), so it is
         better to avoid them.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Do not print out any database-specific information, especially
         about the schema, by fair means or foul. See also <a href="security.errors.php" class="link">Error Reporting</a> and <a href="ref.errorfunc.php" class="link">Error Handling and Logging Functions</a>.
        </span>
       </li>
      </ul>
     </p>

     <p class="simpara">
      Besides these, you benefit from logging queries either within your script
      or by the database itself, if it supports logging. Obviously, the logging is unable
      to prevent any harmful attempt, but it can be helpful to trace back which
      application has been circumvented. The log is not useful by itself but
      through the information it contains. More detail is generally better than less.
     </p>
    </div>
   </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/security/database.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity.database.sql-injection%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security.database.sql-injection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.database.sql-injection.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106564">  <div class="votes">
    <div id="Vu106564">
    <a href="/manual/vote-note.php?id=106564&amp;page=security.database.sql-injection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106564">
    <a href="/manual/vote-note.php?id=106564&amp;page=security.database.sql-injection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106564" title="54% like this...">
    43
    </div>
  </div>
  <a href="#106564" class="name">
  <strong class="user"><em>Richard dot Corfield at gmail dot com</em></strong></a><a class="genanchor" href="#106564"> &para;</a><div class="date" title="2011-11-18 02:01"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106564">
<div class="phpcode"><code><span class="html">The best way has got to be parameterised queries. Then it doesn't matter what the user types in the data goes to the database as a value. <br /><br />A quick search online shows some possibilities in PHP which is great! Even on this site - <a href="http://php.net/manual/en/pdo.prepared-statements.php" rel="nofollow" target="_blank">http://php.net/manual/en/pdo.prepared-statements.php</a><br />which also gives the reasons this is good both for security and performance.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security.database.sql-injection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.database.sql-injection.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="security.database.php">Database Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="security.database.design.php" title="Designing Databases">Designing Databases</a>
                        </li>
                                                <li class="">
                            <a href="security.database.connection.php" title="Connecting to Database">Connecting to Database</a>
                        </li>
                                                <li class="">
                            <a href="security.database.storage.php" title="Encrypted Storage Model">Encrypted Storage Model</a>
                        </li>
                                                <li class="current">
                            <a href="security.database.sql-injection.php" title="SQL Injection">SQL Injection</a>
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
