<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_field_type - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-field-type.php">
 <link rel="shorturl" href="https://www.php.net/pg-field-type">
 <link rel="alternate" href="https://www.php.net/pg-field-type" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-field-table.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-field-type-oid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-field-type.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-field-type.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-field-type.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-field-type.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-field-type.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-field-type.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-field-type.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-field-type.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-field-type.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-field-type.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-field-type.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the type name for the corresponding field number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_field_type - Manual" />
<meta name="twitter:description" content="Returns the type name for the corresponding field number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_field_type - Manual" />
<meta itemprop="description" content="Returns the type name for the corresponding field number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the type name for the corresponding field number" />

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
        <a href="function.pg-field-type-oid.php">
          pg_field_type_oid &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-field-table.php">
          &laquo; pg_field_table        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.pgsql.php'>PostgreSQL</a></li>      <li><a href='ref.pgsql.php'>PostgreSQL Functions</a></li>      </ul>
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
            <option value='en/function.pg-field-type.php' selected="selected">English</option>
            <option value='de/function.pg-field-type.php'>German</option>
            <option value='es/function.pg-field-type.php'>Spanish</option>
            <option value='fr/function.pg-field-type.php'>French</option>
            <option value='it/function.pg-field-type.php'>Italian</option>
            <option value='ja/function.pg-field-type.php'>Japanese</option>
            <option value='pt_BR/function.pg-field-type.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-field-type.php'>Russian</option>
            <option value='tr/function.pg-field-type.php'>Turkish</option>
            <option value='uk/function.pg-field-type.php'>Ukrainian</option>
            <option value='zh/function.pg-field-type.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-field-type" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_field_type</h1> 
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_field_type</span> &mdash; <span class="dc-title">
   Returns the type name for the corresponding field number
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-field-type-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_field_type</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-result.php" class="type PgSql\Result">PgSql\Result</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_field_type()</strong></span> returns a string containing the
   base type name of the given <code class="parameter">field</code> in the
   given <code class="parameter">result</code> instance.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If the field uses a PostgreSQL domain (rather than a basic type), it is
    the name of the domain&#039;s underlying type that is returned, rather than the 
    name of the domain itself.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function used to be called <span class="function"><strong>pg_fieldtype()</strong></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pg-field-type-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">result</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span> instance, returned by <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>,
<span class="function"><a href="function.pg-query-params.php" class="function">pg_query_params()</a></span> or <span class="function"><a href="function.pg-execute.php" class="function">pg_execute()</a></span>(among others).</p>
     </dd>
    
    
     <dt><code class="parameter">field</code></dt>
      <dd>
       <p class="para">
        Field number, starting from 0.
       </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-field-type-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the base name of the field&#039;s type.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-field-type-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">result</code> parameter expects an <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.pg-field-type-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2070">
    <p><strong>Example #1 Getting information about fields</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  $dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=publisher"</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"Could not connect"</span><span style="color: #007700">);<br /><br />  </span><span style="color: #FF8000">// Assume 'title' is a varchar type<br />  </span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">, </span><span style="color: #DD0000">"select title from authors where author = 'Orwell'"</span><span style="color: #007700">);<br /><br />  echo </span><span style="color: #DD0000">"Title field type: "</span><span style="color: #007700">, </span><span style="color: #0000BB">pg_field_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Title field type: varchar</pre>
</div>
    </div>
   </div> 
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.pg-field-type-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-field-prtlen.php" class="function" rel="rdfs-seeAlso">pg_field_prtlen()</a> - Returns the printed length</span></li>
    <li><span class="function"><a href="function.pg-field-name.php" class="function" rel="rdfs-seeAlso">pg_field_name()</a> - Returns the name of a field</span></li>
    <li><span class="function"><a href="function.pg-field-type-oid.php" class="function" rel="rdfs-seeAlso">pg_field_type_oid()</a> - Returns the type ID (OID) for the corresponding field number</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-field-type.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-field-type%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-field-type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-field-type.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111540">  <div class="votes">
    <div id="Vu111540">
    <a href="/manual/vote-note.php?id=111540&amp;page=function.pg-field-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111540">
    <a href="/manual/vote-note.php?id=111540&amp;page=function.pg-field-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111540" title="83% like this...">
    4
    </div>
  </div>
  <a href="#111540" class="name">
  <strong class="user"><em>Joshua Burns</em></strong></a><a class="genanchor" href="#111540"> &para;</a><div class="date" title="2013-03-01 10:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111540">
<div class="phpcode"><code><span class="html">Here is an updated list of nearly every PostgreSQL data type, and PHP's internal C-type equivalent, updated for PostgreSQL 9.2. The first array maps PHP's internal data type to PostgreSQL's equivalents. The second maps PostgreSQL's data-types to PHP's equivalents.<br /><br /><span class="default">&lt;?php<br /><br />$php_to_pg </span><span class="keyword">= array(<br />    </span><span class="string">'bit' </span><span class="keyword">=&gt; array(</span><span class="string">'bit'</span><span class="keyword">),<br />    </span><span class="string">'bool' </span><span class="keyword">=&gt; array(</span><span class="string">'boolean'</span><span class="keyword">),<br />    </span><span class="string">'box' </span><span class="keyword">=&gt; array(</span><span class="string">'box'</span><span class="keyword">),<br />    </span><span class="string">'bpchar' </span><span class="keyword">=&gt; array(</span><span class="string">'character'</span><span class="keyword">,</span><span class="string">'char'</span><span class="keyword">),<br />    </span><span class="string">'bytea' </span><span class="keyword">=&gt; array(</span><span class="string">'bytea'</span><span class="keyword">),<br />    </span><span class="string">'cidr' </span><span class="keyword">=&gt; array(</span><span class="string">'cidr'</span><span class="keyword">),<br />    </span><span class="string">'circle' </span><span class="keyword">=&gt; array(</span><span class="string">'circle'</span><span class="keyword">),<br />    </span><span class="string">'date' </span><span class="keyword">=&gt; array(</span><span class="string">'date'</span><span class="keyword">),<br />    </span><span class="string">'daterange' </span><span class="keyword">=&gt; array(</span><span class="string">'daterange'</span><span class="keyword">),<br />    </span><span class="string">'float4' </span><span class="keyword">=&gt; array(</span><span class="string">'real'</span><span class="keyword">),<br />    </span><span class="string">'float8' </span><span class="keyword">=&gt; array(</span><span class="string">'double precision'</span><span class="keyword">),<br />    </span><span class="string">'inet' </span><span class="keyword">=&gt; array(</span><span class="string">'inet'</span><span class="keyword">),<br />    </span><span class="string">'int2' </span><span class="keyword">=&gt; array(</span><span class="string">'smallint'</span><span class="keyword">, </span><span class="string">'smallserial'</span><span class="keyword">),<br />    </span><span class="string">'int4' </span><span class="keyword">=&gt; array(</span><span class="string">'integer'</span><span class="keyword">, </span><span class="string">'serial'</span><span class="keyword">),<br />    </span><span class="string">'int4range' </span><span class="keyword">=&gt; array(</span><span class="string">'int4range'</span><span class="keyword">),<br />    </span><span class="string">'int8' </span><span class="keyword">=&gt; array(</span><span class="string">'bigint'</span><span class="keyword">, </span><span class="string">'bigserial'</span><span class="keyword">),<br />    </span><span class="string">'int8range' </span><span class="keyword">=&gt; array(</span><span class="string">'int8range'</span><span class="keyword">),<br />    </span><span class="string">'interval' </span><span class="keyword">=&gt; array(</span><span class="string">'interval'</span><span class="keyword">),<br />    </span><span class="string">'json' </span><span class="keyword">=&gt; array(</span><span class="string">'json'</span><span class="keyword">),<br />    </span><span class="string">'lseg' </span><span class="keyword">=&gt; array(</span><span class="string">'lseg'</span><span class="keyword">),<br />    </span><span class="string">'macaddr' </span><span class="keyword">=&gt; array(</span><span class="string">'macaddr'</span><span class="keyword">),<br />    </span><span class="string">'money' </span><span class="keyword">=&gt; array(</span><span class="string">'money'</span><span class="keyword">),<br />    </span><span class="string">'numeric' </span><span class="keyword">=&gt; array(</span><span class="string">'decimal'</span><span class="keyword">, </span><span class="string">'numeric'</span><span class="keyword">),<br />    </span><span class="string">'numrange' </span><span class="keyword">=&gt; array(</span><span class="string">'numrange'</span><span class="keyword">),<br />    </span><span class="string">'path' </span><span class="keyword">=&gt; array(</span><span class="string">'path'</span><span class="keyword">),<br />    </span><span class="string">'point' </span><span class="keyword">=&gt; array(</span><span class="string">'point'</span><span class="keyword">),<br />    </span><span class="string">'polygon' </span><span class="keyword">=&gt; array(</span><span class="string">'polygon'</span><span class="keyword">),<br />    </span><span class="string">'text' </span><span class="keyword">=&gt; array(</span><span class="string">'text'</span><span class="keyword">),<br />    </span><span class="string">'time' </span><span class="keyword">=&gt; array(</span><span class="string">'time'</span><span class="keyword">, </span><span class="string">'time without time zone'</span><span class="keyword">),<br />    </span><span class="string">'timestamp' </span><span class="keyword">=&gt; array(</span><span class="string">'timestamp'</span><span class="keyword">, </span><span class="string">'timestamp without time zone'</span><span class="keyword">),<br />    </span><span class="string">'timestamptz' </span><span class="keyword">=&gt; array(</span><span class="string">'timestamp with time zone'</span><span class="keyword">),<br />    </span><span class="string">'timetz' </span><span class="keyword">=&gt; array(</span><span class="string">'time with time zone'</span><span class="keyword">),<br />    </span><span class="string">'tsquery' </span><span class="keyword">=&gt; array(</span><span class="string">'tsquery'</span><span class="keyword">),<br />    </span><span class="string">'tsrange' </span><span class="keyword">=&gt; array(</span><span class="string">'tsrange'</span><span class="keyword">),<br />    </span><span class="string">'tsvector' </span><span class="keyword">=&gt; array(</span><span class="string">'tsvector'</span><span class="keyword">),<br />    </span><span class="string">'uuid' </span><span class="keyword">=&gt; array(</span><span class="string">'uuid'</span><span class="keyword">),<br />    </span><span class="string">'varbit' </span><span class="keyword">=&gt; array(</span><span class="string">'bit varying'</span><span class="keyword">),<br />    </span><span class="string">'varchar' </span><span class="keyword">=&gt; array(</span><span class="string">'character varying'</span><span class="keyword">, </span><span class="string">'varchar'</span><span class="keyword">),<br />    </span><span class="string">'xml' </span><span class="keyword">=&gt; array(</span><span class="string">'xml'</span><span class="keyword">),<br />);<br /><br /></span><span class="default">$pg_to_php </span><span class="keyword">= array(<br />    </span><span class="string">'bit' </span><span class="keyword">=&gt; </span><span class="string">'bit'</span><span class="keyword">,<br />    </span><span class="string">'boolean' </span><span class="keyword">=&gt; </span><span class="string">'bool'</span><span class="keyword">,<br />    </span><span class="string">'box' </span><span class="keyword">=&gt; </span><span class="string">'box'</span><span class="keyword">,<br />    </span><span class="string">'character' </span><span class="keyword">=&gt; </span><span class="string">'bpchar'</span><span class="keyword">,<br />    </span><span class="string">'char' </span><span class="keyword">=&gt; </span><span class="string">'bpchar'</span><span class="keyword">,<br />    </span><span class="string">'bytea' </span><span class="keyword">=&gt; </span><span class="string">'bytea'</span><span class="keyword">,<br />    </span><span class="string">'cidr' </span><span class="keyword">=&gt; </span><span class="string">'cidr'</span><span class="keyword">,<br />    </span><span class="string">'circle' </span><span class="keyword">=&gt; </span><span class="string">'circle'</span><span class="keyword">,<br />    </span><span class="string">'date' </span><span class="keyword">=&gt; </span><span class="string">'date'</span><span class="keyword">,<br />    </span><span class="string">'daterange' </span><span class="keyword">=&gt; </span><span class="string">'daterange'</span><span class="keyword">,<br />    </span><span class="string">'real' </span><span class="keyword">=&gt; </span><span class="string">'float4'</span><span class="keyword">,<br />    </span><span class="string">'double precision' </span><span class="keyword">=&gt; </span><span class="string">'float8'</span><span class="keyword">,<br />    </span><span class="string">'inet' </span><span class="keyword">=&gt; </span><span class="string">'inet'</span><span class="keyword">,<br />    </span><span class="string">'smallint' </span><span class="keyword">=&gt; </span><span class="string">'int2'</span><span class="keyword">,<br />    </span><span class="string">'smallserial' </span><span class="keyword">=&gt; </span><span class="string">'int2'</span><span class="keyword">,<br />    </span><span class="string">'integer' </span><span class="keyword">=&gt; </span><span class="string">'int4'</span><span class="keyword">,<br />    </span><span class="string">'serial' </span><span class="keyword">=&gt; </span><span class="string">'int4'</span><span class="keyword">,<br />    </span><span class="string">'int4range' </span><span class="keyword">=&gt; </span><span class="string">'int4range'</span><span class="keyword">,<br />    </span><span class="string">'bigint' </span><span class="keyword">=&gt; </span><span class="string">'int8'</span><span class="keyword">,<br />    </span><span class="string">'bigserial' </span><span class="keyword">=&gt; </span><span class="string">'int8'</span><span class="keyword">,<br />    </span><span class="string">'int8range' </span><span class="keyword">=&gt; </span><span class="string">'int8range'</span><span class="keyword">,<br />    </span><span class="string">'interval' </span><span class="keyword">=&gt; </span><span class="string">'interval'</span><span class="keyword">,<br />    </span><span class="string">'json' </span><span class="keyword">=&gt; </span><span class="string">'json'</span><span class="keyword">,<br />    </span><span class="string">'lseg' </span><span class="keyword">=&gt; </span><span class="string">'lseg'</span><span class="keyword">,<br />    </span><span class="string">'macaddr' </span><span class="keyword">=&gt; </span><span class="string">'macaddr'</span><span class="keyword">,<br />    </span><span class="string">'money' </span><span class="keyword">=&gt; </span><span class="string">'money'</span><span class="keyword">,<br />    </span><span class="string">'decimal' </span><span class="keyword">=&gt; </span><span class="string">'numeric'</span><span class="keyword">,<br />    </span><span class="string">'numeric' </span><span class="keyword">=&gt; </span><span class="string">'numeric'</span><span class="keyword">,<br />    </span><span class="string">'numrange' </span><span class="keyword">=&gt; </span><span class="string">'numrange'</span><span class="keyword">,<br />    </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'path'</span><span class="keyword">,<br />    </span><span class="string">'point' </span><span class="keyword">=&gt; </span><span class="string">'point'</span><span class="keyword">,<br />    </span><span class="string">'polygon' </span><span class="keyword">=&gt; </span><span class="string">'polygon'</span><span class="keyword">,<br />    </span><span class="string">'text' </span><span class="keyword">=&gt; </span><span class="string">'text'</span><span class="keyword">,<br />    </span><span class="string">'time' </span><span class="keyword">=&gt; </span><span class="string">'time'</span><span class="keyword">,<br />    </span><span class="string">'time without time zone' </span><span class="keyword">=&gt; </span><span class="string">'time'</span><span class="keyword">,<br />    </span><span class="string">'timestamp' </span><span class="keyword">=&gt; </span><span class="string">'timestamp'</span><span class="keyword">,<br />    </span><span class="string">'timestamp without time zone' </span><span class="keyword">=&gt; </span><span class="string">'timestamp'</span><span class="keyword">,<br />    </span><span class="string">'timestamp with time zone' </span><span class="keyword">=&gt; </span><span class="string">'timestamptz'</span><span class="keyword">,<br />    </span><span class="string">'time with time zone' </span><span class="keyword">=&gt; </span><span class="string">'timetz'</span><span class="keyword">,<br />    </span><span class="string">'tsquery' </span><span class="keyword">=&gt; </span><span class="string">'tsquery'</span><span class="keyword">,<br />    </span><span class="string">'tsrange' </span><span class="keyword">=&gt; </span><span class="string">'tsrange'</span><span class="keyword">,<br />    </span><span class="string">'tstzrange' </span><span class="keyword">=&gt; </span><span class="string">'tstzrange'</span><span class="keyword">,<br />    </span><span class="string">'tsvector' </span><span class="keyword">=&gt; </span><span class="string">'tsvector'</span><span class="keyword">,<br />    </span><span class="string">'uuid' </span><span class="keyword">=&gt; </span><span class="string">'uuid'</span><span class="keyword">,<br />    </span><span class="string">'bit varying' </span><span class="keyword">=&gt; </span><span class="string">'varbit'</span><span class="keyword">,<br />    </span><span class="string">'character varying' </span><span class="keyword">=&gt; </span><span class="string">'varchar'</span><span class="keyword">,<br />    </span><span class="string">'varchar' </span><span class="keyword">=&gt; </span><span class="string">'varchar'</span><span class="keyword">,<br />    </span><span class="string">'xml' </span><span class="keyword">=&gt; </span><span class="string">'xml'<br /></span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95704">  <div class="votes">
    <div id="Vu95704">
    <a href="/manual/vote-note.php?id=95704&amp;page=function.pg-field-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95704">
    <a href="/manual/vote-note.php?id=95704&amp;page=function.pg-field-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95704" title="no votes...">
    0
    </div>
  </div>
  <a href="#95704" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#95704"> &para;</a><div class="date" title="2010-01-16 07:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95704">
<div class="phpcode"><code><span class="html">Also be aware that postgreSQL array fields will prefix the type name with an underscore (e.g. "_int4" or "_text"), while composite a.k.a. row-type fields will return type "record".</span></code></div>
  </div>
 </div>
  <div class="note" id="31784">  <div class="votes">
    <div id="Vu31784">
    <a href="/manual/vote-note.php?id=31784&amp;page=function.pg-field-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31784">
    <a href="/manual/vote-note.php?id=31784&amp;page=function.pg-field-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31784" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#31784" class="name">
  <strong class="user"><em>andy at a 2 h d dot com</em></strong></a><a class="genanchor" href="#31784"> &para;</a><div class="date" title="2003-05-03 12:09"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31784">
<div class="phpcode"><code><span class="html">The types returned are:<br />  bool<br />  int2 (smallint)<br />  int4<br />  int8 (bigint)<br />  numeric<br />  float4 (real / float)<br />  float8 (double)<br />  timestamp<br />  date<br />  time<br />  varchar<br />  bpchar (fixed leng string, 'blank padded char')<br />  inet (ip address)<br />  money<br /><br />There are some other more esoteric types, e.g. 'circle', but these are the most common.</span></code></div>
  </div>
 </div>
  <div class="note" id="60297">  <div class="votes">
    <div id="Vu60297">
    <a href="/manual/vote-note.php?id=60297&amp;page=function.pg-field-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60297">
    <a href="/manual/vote-note.php?id=60297&amp;page=function.pg-field-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60297" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#60297" class="name">
  <strong class="user"><em>marxarelli</em></strong></a><a class="genanchor" href="#60297"> &para;</a><div class="date" title="2006-01-02 02:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60297">
<div class="phpcode"><code><span class="html">Because complete documentation is always helpful, here are all the PostgreSQL general purpose types as they are listed in the 8.1 documentation, and each corresponding string returned by pg_field_type().<br /><br />bigint =&gt; int8<br />bigserial =&gt; int8<br />bit =&gt; bit<br />bit varying =&gt; varbit<br />boolean =&gt; bool<br />box =&gt; box<br />bytea =&gt; bytea<br />character varying =&gt; varchar<br />character =&gt; bpchar<br />cidr =&gt; cidr<br />circle =&gt; circle<br />date =&gt; date<br />double precision =&gt; float8<br />inet =&gt; inet<br />integer =&gt; int4<br />interval =&gt; interval<br />line =&gt; line<br />lseg =&gt; lseg<br />macaddr =&gt; macaddr<br />money =&gt; money<br />numeric =&gt; numeric<br />path =&gt; path<br />point =&gt; point<br />polygon =&gt; polygon<br />real =&gt; float4<br />smallint =&gt; int2<br />serial =&gt; int4<br />text =&gt; text<br />time =&gt; time<br />time with time zone =&gt; timetz<br />timestamp =&gt; timestamp<br />timestamp with time zone =&gt; timestamptz<br /><br />And for the record... (note the 7.4 client lib)<br /># postmaster --version<br />postmaster (PostgreSQL) 8.0.4<br /><br /># ldd libphp4.so<br />...<br />libpq.so.3 =&gt; /usr/lib/libpq.so.3 (0xb7ac8000)<br />...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-field-type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-field-type.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pgsql.php">PostgreSQL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.pg-affected-rows.php" title="pg_&#8203;affected_&#8203;rows">pg_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-cancel-query.php" title="pg_&#8203;cancel_&#8203;query">pg_&#8203;cancel_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-client-encoding.php" title="pg_&#8203;client_&#8203;encoding">pg_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-close.php" title="pg_&#8203;close">pg_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connect.php" title="pg_&#8203;connect">pg_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connect-poll.php" title="pg_&#8203;connect_&#8203;poll">pg_&#8203;connect_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-busy.php" title="pg_&#8203;connection_&#8203;busy">pg_&#8203;connection_&#8203;busy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-reset.php" title="pg_&#8203;connection_&#8203;reset">pg_&#8203;connection_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-status.php" title="pg_&#8203;connection_&#8203;status">pg_&#8203;connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-consume-input.php" title="pg_&#8203;consume_&#8203;input">pg_&#8203;consume_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-convert.php" title="pg_&#8203;convert">pg_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-from.php" title="pg_&#8203;copy_&#8203;from">pg_&#8203;copy_&#8203;from</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-to.php" title="pg_&#8203;copy_&#8203;to">pg_&#8203;copy_&#8203;to</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-dbname.php" title="pg_&#8203;dbname">pg_&#8203;dbname</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-delete.php" title="pg_&#8203;delete">pg_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-end-copy.php" title="pg_&#8203;end_&#8203;copy">pg_&#8203;end_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-bytea.php" title="pg_&#8203;escape_&#8203;bytea">pg_&#8203;escape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-identifier.php" title="pg_&#8203;escape_&#8203;identifier">pg_&#8203;escape_&#8203;identifier</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-literal.php" title="pg_&#8203;escape_&#8203;literal">pg_&#8203;escape_&#8203;literal</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-string.php" title="pg_&#8203;escape_&#8203;string">pg_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-execute.php" title="pg_&#8203;execute">pg_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all.php" title="pg_&#8203;fetch_&#8203;all">pg_&#8203;fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all-columns.php" title="pg_&#8203;fetch_&#8203;all_&#8203;columns">pg_&#8203;fetch_&#8203;all_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-array.php" title="pg_&#8203;fetch_&#8203;array">pg_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-assoc.php" title="pg_&#8203;fetch_&#8203;assoc">pg_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-object.php" title="pg_&#8203;fetch_&#8203;object">pg_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-result.php" title="pg_&#8203;fetch_&#8203;result">pg_&#8203;fetch_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-row.php" title="pg_&#8203;fetch_&#8203;row">pg_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-is-null.php" title="pg_&#8203;field_&#8203;is_&#8203;null">pg_&#8203;field_&#8203;is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-name.php" title="pg_&#8203;field_&#8203;name">pg_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-num.php" title="pg_&#8203;field_&#8203;num">pg_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-prtlen.php" title="pg_&#8203;field_&#8203;prtlen">pg_&#8203;field_&#8203;prtlen</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-size.php" title="pg_&#8203;field_&#8203;size">pg_&#8203;field_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-table.php" title="pg_&#8203;field_&#8203;table">pg_&#8203;field_&#8203;table</a>
                        </li>
                                                <li class="current">
                            <a href="function.pg-field-type.php" title="pg_&#8203;field_&#8203;type">pg_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-type-oid.php" title="pg_&#8203;field_&#8203;type_&#8203;oid">pg_&#8203;field_&#8203;type_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-flush.php" title="pg_&#8203;flush">pg_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-free-result.php" title="pg_&#8203;free_&#8203;result">pg_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-notify.php" title="pg_&#8203;get_&#8203;notify">pg_&#8203;get_&#8203;notify</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-pid.php" title="pg_&#8203;get_&#8203;pid">pg_&#8203;get_&#8203;pid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-result.php" title="pg_&#8203;get_&#8203;result">pg_&#8203;get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-host.php" title="pg_&#8203;host">pg_&#8203;host</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-insert.php" title="pg_&#8203;insert">pg_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-error.php" title="pg_&#8203;last_&#8203;error">pg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-notice.php" title="pg_&#8203;last_&#8203;notice">pg_&#8203;last_&#8203;notice</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-oid.php" title="pg_&#8203;last_&#8203;oid">pg_&#8203;last_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-close.php" title="pg_&#8203;lo_&#8203;close">pg_&#8203;lo_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-create.php" title="pg_&#8203;lo_&#8203;create">pg_&#8203;lo_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-export.php" title="pg_&#8203;lo_&#8203;export">pg_&#8203;lo_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-import.php" title="pg_&#8203;lo_&#8203;import">pg_&#8203;lo_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-open.php" title="pg_&#8203;lo_&#8203;open">pg_&#8203;lo_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read.php" title="pg_&#8203;lo_&#8203;read">pg_&#8203;lo_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read-all.php" title="pg_&#8203;lo_&#8203;read_&#8203;all">pg_&#8203;lo_&#8203;read_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-seek.php" title="pg_&#8203;lo_&#8203;seek">pg_&#8203;lo_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-tell.php" title="pg_&#8203;lo_&#8203;tell">pg_&#8203;lo_&#8203;tell</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-truncate.php" title="pg_&#8203;lo_&#8203;truncate">pg_&#8203;lo_&#8203;truncate</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-unlink.php" title="pg_&#8203;lo_&#8203;unlink">pg_&#8203;lo_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-write.php" title="pg_&#8203;lo_&#8203;write">pg_&#8203;lo_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-meta-data.php" title="pg_&#8203;meta_&#8203;data">pg_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-fields.php" title="pg_&#8203;num_&#8203;fields">pg_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-rows.php" title="pg_&#8203;num_&#8203;rows">pg_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-options.php" title="pg_&#8203;options">pg_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-parameter-status.php" title="pg_&#8203;parameter_&#8203;status">pg_&#8203;parameter_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-pconnect.php" title="pg_&#8203;pconnect">pg_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-ping.php" title="pg_&#8203;ping">pg_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-port.php" title="pg_&#8203;port">pg_&#8203;port</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-prepare.php" title="pg_&#8203;prepare">pg_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-put-line.php" title="pg_&#8203;put_&#8203;line">pg_&#8203;put_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query.php" title="pg_&#8203;query">pg_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query-params.php" title="pg_&#8203;query_&#8203;params">pg_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error.php" title="pg_&#8203;result_&#8203;error">pg_&#8203;result_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error-field.php" title="pg_&#8203;result_&#8203;error_&#8203;field">pg_&#8203;result_&#8203;error_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-memory-size.php" title="pg_&#8203;result_&#8203;memory_&#8203;size">pg_&#8203;result_&#8203;memory_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-seek.php" title="pg_&#8203;result_&#8203;seek">pg_&#8203;result_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-status.php" title="pg_&#8203;result_&#8203;status">pg_&#8203;result_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-select.php" title="pg_&#8203;select">pg_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-execute.php" title="pg_&#8203;send_&#8203;execute">pg_&#8203;send_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-prepare.php" title="pg_&#8203;send_&#8203;prepare">pg_&#8203;send_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query.php" title="pg_&#8203;send_&#8203;query">pg_&#8203;send_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query-params.php" title="pg_&#8203;send_&#8203;query_&#8203;params">pg_&#8203;send_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-chunked-rows-size.php" title="pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size">pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-client-encoding.php" title="pg_&#8203;set_&#8203;client_&#8203;encoding">pg_&#8203;set_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-context-visibility.php" title="pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility">pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-verbosity.php" title="pg_&#8203;set_&#8203;error_&#8203;verbosity">pg_&#8203;set_&#8203;error_&#8203;verbosity</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-socket.php" title="pg_&#8203;socket">pg_&#8203;socket</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-trace.php" title="pg_&#8203;trace">pg_&#8203;trace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-transaction-status.php" title="pg_&#8203;transaction_&#8203;status">pg_&#8203;transaction_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-tty.php" title="pg_&#8203;tty">pg_&#8203;tty</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-unescape-bytea.php" title="pg_&#8203;unescape_&#8203;bytea">pg_&#8203;unescape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-untrace.php" title="pg_&#8203;untrace">pg_&#8203;untrace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-update.php" title="pg_&#8203;update">pg_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-version.php" title="pg_&#8203;version">pg_&#8203;version</a>
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
