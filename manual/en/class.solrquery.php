<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SolrQuery - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.solrquery.php">
 <link rel="shorturl" href="https://www.php.net/solrquery">
 <link rel="alternate" href="https://www.php.net/solrquery" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="prev" href="https://www.php.net/manual/en/solrmodifiableparams.destruct.php">
 <link rel="next" href="https://www.php.net/manual/en/solrquery.addexpandfilterquery.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.solrquery.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.solrquery.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.solrquery.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.solrquery.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.solrquery.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.solrquery.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.solrquery.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.solrquery.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.solrquery.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.solrquery.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.solrquery.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SolrQuery class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SolrQuery - Manual" />
<meta name="twitter:description" content="The SolrQuery class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SolrQuery - Manual" />
<meta itemprop="description" content="The SolrQuery class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SolrQuery class" />

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
        <a href="solrquery.addexpandfilterquery.php">
          SolrQuery::addExpandFilterQuery &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="solrmodifiableparams.destruct.php">
          &laquo; SolrModifiableParams::__destruct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.search.php'>Search Engine Extensions</a></li>      <li><a href='book.solr.php'>Solr</a></li>      </ul>
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
            <option value='en/class.solrquery.php' selected="selected">English</option>
            <option value='de/class.solrquery.php'>German</option>
            <option value='es/class.solrquery.php'>Spanish</option>
            <option value='fr/class.solrquery.php'>French</option>
            <option value='it/class.solrquery.php'>Italian</option>
            <option value='ja/class.solrquery.php'>Japanese</option>
            <option value='pt_BR/class.solrquery.php'>Brazilian Portuguese</option>
            <option value='ru/class.solrquery.php'>Russian</option>
            <option value='tr/class.solrquery.php'>Turkish</option>
            <option value='uk/class.solrquery.php'>Ukrainian</option>
            <option value='zh/class.solrquery.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.solrquery" class="reference">

 <h1 class="title">The SolrQuery class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>


  <div class="section" id="solrquery.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a collection of name-value pairs sent to the Solr server during a request.
   </p>
  </div>


  <div class="section" id="solrquery.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">SolrQuery</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.solrmodifiableparams.php" class="classname">SolrModifiableParams</a>
     </span>
     
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.serializable.php" class="interfacename">Serializable</a></span> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.order-asc"><var class="varname">ORDER_ASC</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.order-desc"><var class="varname">ORDER_DESC</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.facet-sort-index"><var class="varname">FACET_SORT_INDEX</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.facet-sort-count"><var class="varname">FACET_SORT_COUNT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.terms-sort-index"><var class="varname">TERMS_SORT_INDEX</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.terms-sort-count"><var class="varname">TERMS_SORT_COUNT</var></a></var><span class="initializer"> = 1</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="solrquery.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addexpandfilterquery.php" class="methodname">addExpandFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addexpandsortfield.php" class="methodname">addExpandSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$order</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetdatefield.php" class="methodname">addFacetDateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dateField</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetdateother.php" class="methodname">addFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetfield.php" class="methodname">addFacetField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetquery.php" class="methodname">addFacetQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$facetQuery</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfield.php" class="methodname">addField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfilterquery.php" class="methodname">addFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupfield.php" class="methodname">addGroupField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupfunction.php" class="methodname">addGroupFunction</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupquery.php" class="methodname">addGroupQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupsortfield.php" class="methodname">addGroupSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$order</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addhighlightfield.php" class="methodname">addHighlightField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addmltfield.php" class="methodname">addMltField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addmltqueryfield.php" class="methodname">addMltQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$boost</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addsortfield.php" class="methodname">addSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$order</code><span class="initializer"> = SolrQuery::ORDER_DESC</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addstatsfacet.php" class="methodname">addStatsFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addstatsfield.php" class="methodname">addStatsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.collapse.php" class="methodname">collapse</a></span>(<span class="methodparam"><span class="type"><a href="class.solrcollapsefunction.php" class="type SolrCollapseFunction">SolrCollapseFunction</a></span> <code class="parameter">$collapseFunction</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpand.php" class="methodname">getExpand</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandfilterqueries.php" class="methodname">getExpandFilterQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandquery.php" class="methodname">getExpandQuery</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandrows.php" class="methodname">getExpandRows</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandsortfields.php" class="methodname">getExpandSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacet.php" class="methodname">getFacet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdateend.php" class="methodname">getFacetDateEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatefields.php" class="methodname">getFacetDateFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdategap.php" class="methodname">getFacetDateGap</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatehardend.php" class="methodname">getFacetDateHardEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdateother.php" class="methodname">getFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatestart.php" class="methodname">getFacetDateStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetfields.php" class="methodname">getFacetFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetlimit.php" class="methodname">getFacetLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmethod.php" class="methodname">getFacetMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmincount.php" class="methodname">getFacetMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmissing.php" class="methodname">getFacetMissing</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetoffset.php" class="methodname">getFacetOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetprefix.php" class="methodname">getFacetPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetqueries.php" class="methodname">getFacetQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetsort.php" class="methodname">getFacetSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfields.php" class="methodname">getFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfilterqueries.php" class="methodname">getFilterQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroup.php" class="methodname">getGroup</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupcachepercent.php" class="methodname">getGroupCachePercent</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfacet.php" class="methodname">getGroupFacet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfields.php" class="methodname">getGroupFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupformat.php" class="methodname">getGroupFormat</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfunctions.php" class="methodname">getGroupFunctions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgrouplimit.php" class="methodname">getGroupLimit</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupmain.php" class="methodname">getGroupMain</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupngroups.php" class="methodname">getGroupNGroups</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupoffset.php" class="methodname">getGroupOffset</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupqueries.php" class="methodname">getGroupQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupsortfields.php" class="methodname">getGroupSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgrouptruncate.php" class="methodname">getGroupTruncate</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlight.php" class="methodname">getHighlight</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightalternatefield.php" class="methodname">getHighlightAlternateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfields.php" class="methodname">getHighlightFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightformatter.php" class="methodname">getHighlightFormatter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfragmenter.php" class="methodname">getHighlightFragmenter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfragsize.php" class="methodname">getHighlightFragsize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlighthighlightmultiterm.php" class="methodname">getHighlightHighlightMultiTerm</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmaxalternatefieldlength.php" class="methodname">getHighlightMaxAlternateFieldLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmaxanalyzedchars.php" class="methodname">getHighlightMaxAnalyzedChars</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmergecontiguous.php" class="methodname">getHighlightMergeContiguous</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightquery.php" class="methodname">getHighlightQuery</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexmaxanalyzedchars.php" class="methodname">getHighlightRegexMaxAnalyzedChars</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexpattern.php" class="methodname">getHighlightRegexPattern</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexslop.php" class="methodname">getHighlightRegexSlop</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightrequirefieldmatch.php" class="methodname">getHighlightRequireFieldMatch</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsimplepost.php" class="methodname">getHighlightSimplePost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsimplepre.php" class="methodname">getHighlightSimplePre</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsnippets.php" class="methodname">getHighlightSnippets</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightusephrasehighlighter.php" class="methodname">getHighlightUsePhraseHighlighter</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmlt.php" class="methodname">getMlt</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltboost.php" class="methodname">getMltBoost</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltcount.php" class="methodname">getMltCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltfields.php" class="methodname">getMltFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxnumqueryterms.php" class="methodname">getMltMaxNumQueryTerms</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxnumtokens.php" class="methodname">getMltMaxNumTokens</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxwordlength.php" class="methodname">getMltMaxWordLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmindocfrequency.php" class="methodname">getMltMinDocFrequency</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmintermfrequency.php" class="methodname">getMltMinTermFrequency</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltminwordlength.php" class="methodname">getMltMinWordLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltqueryfields.php" class="methodname">getMltQueryFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getquery.php" class="methodname">getQuery</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getrows.php" class="methodname">getRows</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getsortfields.php" class="methodname">getSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstart.php" class="methodname">getStart</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstats.php" class="methodname">getStats</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstatsfacets.php" class="methodname">getStatsFacets</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstatsfields.php" class="methodname">getStatsFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getterms.php" class="methodname">getTerms</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsfield.php" class="methodname">getTermsField</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsincludelowerbound.php" class="methodname">getTermsIncludeLowerBound</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsincludeupperbound.php" class="methodname">getTermsIncludeUpperBound</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermslimit.php" class="methodname">getTermsLimit</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermslowerbound.php" class="methodname">getTermsLowerBound</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsmaxcount.php" class="methodname">getTermsMaxCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsmincount.php" class="methodname">getTermsMinCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsprefix.php" class="methodname">getTermsPrefix</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsreturnraw.php" class="methodname">getTermsReturnRaw</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermssort.php" class="methodname">getTermsSort</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsupperbound.php" class="methodname">getTermsUpperBound</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettimeallowed.php" class="methodname">getTimeAllowed</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removeexpandfilterquery.php" class="methodname">removeExpandFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removeexpandsortfield.php" class="methodname">removeExpandSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetdatefield.php" class="methodname">removeFacetDateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetdateother.php" class="methodname">removeFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetfield.php" class="methodname">removeFacetField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetquery.php" class="methodname">removeFacetQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefield.php" class="methodname">removeField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefilterquery.php" class="methodname">removeFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removehighlightfield.php" class="methodname">removeHighlightField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removemltfield.php" class="methodname">removeMltField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removemltqueryfield.php" class="methodname">removeMltQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$queryField</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removesortfield.php" class="methodname">removeSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removestatsfacet.php" class="methodname">removeStatsFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removestatsfield.php" class="methodname">removeStatsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setechohandler.php" class="methodname">setEchoHandler</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setechoparams.php" class="methodname">setEchoParams</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpand.php" class="methodname">setExpand</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpandquery.php" class="methodname">setExpandQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpandrows.php" class="methodname">setExpandRows</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexplainother.php" class="methodname">setExplainOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacet.php" class="methodname">setFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdateend.php" class="methodname">setFacetDateEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdategap.php" class="methodname">setFacetDateGap</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdatehardend.php" class="methodname">setFacetDateHardEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdatestart.php" class="methodname">setFacetDateStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetenumcachemindefaultfrequency.php" class="methodname">setFacetEnumCacheMinDefaultFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetlimit.php" class="methodname">setFacetLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmethod.php" class="methodname">setFacetMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmincount.php" class="methodname">setFacetMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mincount</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmissing.php" class="methodname">setFacetMissing</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetoffset.php" class="methodname">setFacetOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetprefix.php" class="methodname">setFacetPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetsort.php" class="methodname">setFacetSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$facetSort</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroup.php" class="methodname">setGroup</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupcachepercent.php" class="methodname">setGroupCachePercent</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$percent</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupfacet.php" class="methodname">setGroupFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupformat.php" class="methodname">setGroupFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgrouplimit.php" class="methodname">setGroupLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupmain.php" class="methodname">setGroupMain</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupngroups.php" class="methodname">setGroupNGroups</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupoffset.php" class="methodname">setGroupOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgrouptruncate.php" class="methodname">setGroupTruncate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlight.php" class="methodname">setHighlight</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightalternatefield.php" class="methodname">setHighlightAlternateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightformatter.php" class="methodname">setHighlightFormatter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$formatter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightfragmenter.php" class="methodname">setHighlightFragmenter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fragmenter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightfragsize.php" class="methodname">setHighlightFragsize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlighthighlightmultiterm.php" class="methodname">setHighlightHighlightMultiTerm</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmaxalternatefieldlength.php" class="methodname">setHighlightMaxAlternateFieldLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$fieldLength</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmaxanalyzedchars.php" class="methodname">setHighlightMaxAnalyzedChars</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmergecontiguous.php" class="methodname">setHighlightMergeContiguous</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightquery.php" class="methodname">setHighlightQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexmaxanalyzedchars.php" class="methodname">setHighlightRegexMaxAnalyzedChars</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxAnalyzedChars</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexpattern.php" class="methodname">setHighlightRegexPattern</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexslop.php" class="methodname">setHighlightRegexSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$factor</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightrequirefieldmatch.php" class="methodname">setHighlightRequireFieldMatch</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsimplepost.php" class="methodname">setHighlightSimplePost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$simplePost</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsimplepre.php" class="methodname">setHighlightSimplePre</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$simplePre</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsnippets.php" class="methodname">setHighlightSnippets</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightusephrasehighlighter.php" class="methodname">setHighlightUsePhraseHighlighter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmlt.php" class="methodname">setMlt</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltboost.php" class="methodname">setMltBoost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltcount.php" class="methodname">setMltCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$count</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxnumqueryterms.php" class="methodname">setMltMaxNumQueryTerms</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxnumtokens.php" class="methodname">setMltMaxNumTokens</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxwordlength.php" class="methodname">setMltMaxWordLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxWordLength</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmindocfrequency.php" class="methodname">setMltMinDocFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minDocFrequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmintermfrequency.php" class="methodname">setMltMinTermFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minTermFrequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltminwordlength.php" class="methodname">setMltMinWordLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minWordLength</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setomitheader.php" class="methodname">setOmitHeader</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setquery.php" class="methodname">setQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setrows.php" class="methodname">setRows</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setshowdebuginfo.php" class="methodname">setShowDebugInfo</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setstart.php" class="methodname">setStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setstats.php" class="methodname">setStats</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setterms.php" class="methodname">setTerms</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsfield.php" class="methodname">setTermsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldname</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsincludelowerbound.php" class="methodname">setTermsIncludeLowerBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsincludeupperbound.php" class="methodname">setTermsIncludeUpperBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermslimit.php" class="methodname">setTermsLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermslowerbound.php" class="methodname">setTermsLowerBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$lowerBound</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsmaxcount.php" class="methodname">setTermsMaxCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsmincount.php" class="methodname">setTermsMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsprefix.php" class="methodname">setTermsPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsreturnraw.php" class="methodname">setTermsReturnRaw</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermssort.php" class="methodname">setTermsSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$sortType</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsupperbound.php" class="methodname">setTermsUpperBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$upperBound</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settimeallowed.php" class="methodname">setTimeAllowed</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeAllowed</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.destruct.php" class="methodname">__destruct</a></span>()</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrmodifiableparams.construct.php" class="methodname">SolrModifiableParams::__construct</a></span>()</div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrmodifiableparams.destruct.php" class="methodname">SolrModifiableParams::__destruct</a></span>()</div>


   }</div>


  </div>

  

  <div class="section" id="solrquery.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="solrquery.constants.order-asc"><strong><code><a href="class.solrquery.php#solrquery.constants.order-asc">SolrQuery::ORDER_ASC</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the sorting should be in acending order</p>
     </dd>
    

    
     <dt id="solrquery.constants.order-desc"><strong><code><a href="class.solrquery.php#solrquery.constants.order-desc">SolrQuery::ORDER_DESC</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the sorting should be in descending order</p>
     </dd>
    

    
     <dt id="solrquery.constants.facet-sort-index"><strong><code><a href="class.solrquery.php#solrquery.constants.facet-sort-index">SolrQuery::FACET_SORT_INDEX</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the facet should sort by index</p>
     </dd>
    

    
     <dt id="solrquery.constants.facet-sort-count"><strong><code><a href="class.solrquery.php#solrquery.constants.facet-sort-count">SolrQuery::FACET_SORT_COUNT</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the facet should sort by count</p>
     </dd>
    

    
     <dt id="solrquery.constants.terms-sort-index"><strong><code><a href="class.solrquery.php#solrquery.constants.terms-sort-index">SolrQuery::TERMS_SORT_INDEX</a></code></strong></dt>
     <dd>
      <p class="para">Used in the TermsComponent</p>
     </dd>
    

    
     <dt id="solrquery.constants.terms-sort-count"><strong><code><a href="class.solrquery.php#solrquery.constants.terms-sort-count">SolrQuery::TERMS_SORT_COUNT</a></code></strong></dt>
     <dd>
      <p class="para">Used in the TermsComponent</p>
     </dd>
    

   </dl>
  </div>



 </div>

 















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="solrquery.addexpandfilterquery.php">SolrQuery::addExpandFilterQuery</a> — Overrides main filter query, determines which documents to include in the main group</li><li><a href="solrquery.addexpandsortfield.php">SolrQuery::addExpandSortField</a> — Orders the documents within the expanded groups (expand.sort parameter)</li><li><a href="solrquery.addfacetdatefield.php">SolrQuery::addFacetDateField</a> — Maps to facet.date</li><li><a href="solrquery.addfacetdateother.php">SolrQuery::addFacetDateOther</a> — Adds another facet.date.other parameter</li><li><a href="solrquery.addfacetfield.php">SolrQuery::addFacetField</a> — Adds another field to the facet</li><li><a href="solrquery.addfacetquery.php">SolrQuery::addFacetQuery</a> — Adds a facet query</li><li><a href="solrquery.addfield.php">SolrQuery::addField</a> — Specifies which fields to return in the result</li><li><a href="solrquery.addfilterquery.php">SolrQuery::addFilterQuery</a> — Specifies a filter query</li><li><a href="solrquery.addgroupfield.php">SolrQuery::addGroupField</a> — Add a field to be used to group results</li><li><a href="solrquery.addgroupfunction.php">SolrQuery::addGroupFunction</a> — Allows grouping results based on the unique values of a function query (group.func parameter)</li><li><a href="solrquery.addgroupquery.php">SolrQuery::addGroupQuery</a> — Allows grouping of documents that match the given query</li><li><a href="solrquery.addgroupsortfield.php">SolrQuery::addGroupSortField</a> — Add a group sort field (group.sort parameter)</li><li><a href="solrquery.addhighlightfield.php">SolrQuery::addHighlightField</a> — Maps to hl.fl</li><li><a href="solrquery.addmltfield.php">SolrQuery::addMltField</a> — Sets a field to use for similarity</li><li><a href="solrquery.addmltqueryfield.php">SolrQuery::addMltQueryField</a> — Maps to mlt.qf</li><li><a href="solrquery.addsortfield.php">SolrQuery::addSortField</a> — Used to control how the results should be sorted</li><li><a href="solrquery.addstatsfacet.php">SolrQuery::addStatsFacet</a> — Requests a return of sub results for values within the given facet</li><li><a href="solrquery.addstatsfield.php">SolrQuery::addStatsField</a> — Maps to stats.field parameter</li><li><a href="solrquery.collapse.php">SolrQuery::collapse</a> — Collapses the result set to a single document per group</li><li><a href="solrquery.construct.php">SolrQuery::__construct</a> — Constructor</li><li><a href="solrquery.destruct.php">SolrQuery::__destruct</a> — Destructor</li><li><a href="solrquery.getexpand.php">SolrQuery::getExpand</a> — Returns true if group expanding is enabled</li><li><a href="solrquery.getexpandfilterqueries.php">SolrQuery::getExpandFilterQueries</a> — Returns the expand filter queries</li><li><a href="solrquery.getexpandquery.php">SolrQuery::getExpandQuery</a> — Returns the expand query expand.q parameter</li><li><a href="solrquery.getexpandrows.php">SolrQuery::getExpandRows</a> — Returns The number of rows to display in each group (expand.rows)</li><li><a href="solrquery.getexpandsortfields.php">SolrQuery::getExpandSortFields</a> — Returns an array of fields</li><li><a href="solrquery.getfacet.php">SolrQuery::getFacet</a> — Returns the value of the facet parameter</li><li><a href="solrquery.getfacetdateend.php">SolrQuery::getFacetDateEnd</a> — Returns the value for the facet.date.end parameter</li><li><a href="solrquery.getfacetdatefields.php">SolrQuery::getFacetDateFields</a> — Returns all the facet.date fields</li><li><a href="solrquery.getfacetdategap.php">SolrQuery::getFacetDateGap</a> — Returns the value of the facet.date.gap parameter</li><li><a href="solrquery.getfacetdatehardend.php">SolrQuery::getFacetDateHardEnd</a> — Returns the value of the facet.date.hardend parameter</li><li><a href="solrquery.getfacetdateother.php">SolrQuery::getFacetDateOther</a> — Returns the value for the facet.date.other parameter</li><li><a href="solrquery.getfacetdatestart.php">SolrQuery::getFacetDateStart</a> — Returns the  lower bound for the first date range for all date faceting on this field</li><li><a href="solrquery.getfacetfields.php">SolrQuery::getFacetFields</a> — Returns all the facet fields</li><li><a href="solrquery.getfacetlimit.php">SolrQuery::getFacetLimit</a> — Returns the maximum number of constraint counts that should be returned for the facet fields</li><li><a href="solrquery.getfacetmethod.php">SolrQuery::getFacetMethod</a> — Returns the value of the facet.method parameter</li><li><a href="solrquery.getfacetmincount.php">SolrQuery::getFacetMinCount</a> — Returns the minimum counts for facet fields should be included in the response</li><li><a href="solrquery.getfacetmissing.php">SolrQuery::getFacetMissing</a> — Returns the current state of the facet.missing parameter</li><li><a href="solrquery.getfacetoffset.php">SolrQuery::getFacetOffset</a> — Returns an offset into the list of constraints to be used for pagination</li><li><a href="solrquery.getfacetprefix.php">SolrQuery::getFacetPrefix</a> — Returns the facet prefix</li><li><a href="solrquery.getfacetqueries.php">SolrQuery::getFacetQueries</a> — Returns all the facet queries</li><li><a href="solrquery.getfacetsort.php">SolrQuery::getFacetSort</a> — Returns the facet sort type</li><li><a href="solrquery.getfields.php">SolrQuery::getFields</a> — Returns the list of fields that will be returned in the response</li><li><a href="solrquery.getfilterqueries.php">SolrQuery::getFilterQueries</a> — Returns an array of filter queries</li><li><a href="solrquery.getgroup.php">SolrQuery::getGroup</a> — Returns true if grouping is enabled</li><li><a href="solrquery.getgroupcachepercent.php">SolrQuery::getGroupCachePercent</a> — Returns group cache percent value</li><li><a href="solrquery.getgroupfacet.php">SolrQuery::getGroupFacet</a> — Returns the group.facet parameter value</li><li><a href="solrquery.getgroupfields.php">SolrQuery::getGroupFields</a> — Returns group fields (group.field parameter values)</li><li><a href="solrquery.getgroupformat.php">SolrQuery::getGroupFormat</a> — Returns the group.format value</li><li><a href="solrquery.getgroupfunctions.php">SolrQuery::getGroupFunctions</a> — Returns group functions (group.func parameter values)</li><li><a href="solrquery.getgrouplimit.php">SolrQuery::getGroupLimit</a> — Returns the group.limit value</li><li><a href="solrquery.getgroupmain.php">SolrQuery::getGroupMain</a> — Returns the group.main value</li><li><a href="solrquery.getgroupngroups.php">SolrQuery::getGroupNGroups</a> — Returns the group.ngroups value</li><li><a href="solrquery.getgroupoffset.php">SolrQuery::getGroupOffset</a> — Returns the group.offset value</li><li><a href="solrquery.getgroupqueries.php">SolrQuery::getGroupQueries</a> — Returns all the group.query parameter values</li><li><a href="solrquery.getgroupsortfields.php">SolrQuery::getGroupSortFields</a> — Returns the group.sort value</li><li><a href="solrquery.getgrouptruncate.php">SolrQuery::getGroupTruncate</a> — Returns the group.truncate value</li><li><a href="solrquery.gethighlight.php">SolrQuery::getHighlight</a> — Returns the state of the hl parameter</li><li><a href="solrquery.gethighlightalternatefield.php">SolrQuery::getHighlightAlternateField</a> — Returns the highlight field to use as backup or default</li><li><a href="solrquery.gethighlightfields.php">SolrQuery::getHighlightFields</a> — Returns all the fields that Solr should generate highlighted snippets for</li><li><a href="solrquery.gethighlightformatter.php">SolrQuery::getHighlightFormatter</a> — Returns the formatter for the highlighted output</li><li><a href="solrquery.gethighlightfragmenter.php">SolrQuery::getHighlightFragmenter</a> — Returns the text snippet generator for highlighted text</li><li><a href="solrquery.gethighlightfragsize.php">SolrQuery::getHighlightFragsize</a> — Returns the number of characters of fragments to consider for highlighting</li><li><a href="solrquery.gethighlighthighlightmultiterm.php">SolrQuery::getHighlightHighlightMultiTerm</a> — Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</li><li><a href="solrquery.gethighlightmaxalternatefieldlength.php">SolrQuery::getHighlightMaxAlternateFieldLength</a> — Returns the maximum number of characters of the field to return</li><li><a href="solrquery.gethighlightmaxanalyzedchars.php">SolrQuery::getHighlightMaxAnalyzedChars</a> — Returns the maximum number of characters into a document to look for suitable snippets</li><li><a href="solrquery.gethighlightmergecontiguous.php">SolrQuery::getHighlightMergeContiguous</a> — Returns whether or not the collapse contiguous fragments into a single fragment</li><li><a href="solrquery.gethighlightquery.php">SolrQuery::getHighlightQuery</a> — return the highlightquery (hl.q)</li><li><a href="solrquery.gethighlightregexmaxanalyzedchars.php">SolrQuery::getHighlightRegexMaxAnalyzedChars</a> — Returns the maximum number of characters from a field when using the regex fragmenter</li><li><a href="solrquery.gethighlightregexpattern.php">SolrQuery::getHighlightRegexPattern</a> — Returns the regular expression for fragmenting</li><li><a href="solrquery.gethighlightregexslop.php">SolrQuery::getHighlightRegexSlop</a> — Returns the deviation factor from the ideal fragment size</li><li><a href="solrquery.gethighlightrequirefieldmatch.php">SolrQuery::getHighlightRequireFieldMatch</a> — Returns if a field will only be highlighted if the query matched in this particular field</li><li><a href="solrquery.gethighlightsimplepost.php">SolrQuery::getHighlightSimplePost</a> — Returns the text which appears after a highlighted term</li><li><a href="solrquery.gethighlightsimplepre.php">SolrQuery::getHighlightSimplePre</a> — Returns the text which appears before a highlighted term</li><li><a href="solrquery.gethighlightsnippets.php">SolrQuery::getHighlightSnippets</a> — Returns the maximum number of highlighted snippets to generate per field</li><li><a href="solrquery.gethighlightusephrasehighlighter.php">SolrQuery::getHighlightUsePhraseHighlighter</a> — Returns the state of the hl.usePhraseHighlighter parameter</li><li><a href="solrquery.getmlt.php">SolrQuery::getMlt</a> — Returns whether or not MoreLikeThis results should be enabled</li><li><a href="solrquery.getmltboost.php">SolrQuery::getMltBoost</a> — Returns whether or not the query will be boosted by the interesting term relevance</li><li><a href="solrquery.getmltcount.php">SolrQuery::getMltCount</a> — Returns the number of similar documents to return for each result</li><li><a href="solrquery.getmltfields.php">SolrQuery::getMltFields</a> — Returns all the fields to use for similarity</li><li><a href="solrquery.getmltmaxnumqueryterms.php">SolrQuery::getMltMaxNumQueryTerms</a> — Returns the maximum number of query terms that will be included in any generated query</li><li><a href="solrquery.getmltmaxnumtokens.php">SolrQuery::getMltMaxNumTokens</a> — Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</li><li><a href="solrquery.getmltmaxwordlength.php">SolrQuery::getMltMaxWordLength</a> — Returns the maximum word length above which words will be ignored</li><li><a href="solrquery.getmltmindocfrequency.php">SolrQuery::getMltMinDocFrequency</a> — Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</li><li><a href="solrquery.getmltmintermfrequency.php">SolrQuery::getMltMinTermFrequency</a> — Returns the frequency below which terms will be ignored in the source document</li><li><a href="solrquery.getmltminwordlength.php">SolrQuery::getMltMinWordLength</a> — Returns the minimum word length below which words will be ignored</li><li><a href="solrquery.getmltqueryfields.php">SolrQuery::getMltQueryFields</a> — Returns the query fields and their boosts</li><li><a href="solrquery.getquery.php">SolrQuery::getQuery</a> — Returns the main query</li><li><a href="solrquery.getrows.php">SolrQuery::getRows</a> — Returns the maximum number of documents</li><li><a href="solrquery.getsortfields.php">SolrQuery::getSortFields</a> — Returns all the sort fields</li><li><a href="solrquery.getstart.php">SolrQuery::getStart</a> — Returns the offset in the complete result set</li><li><a href="solrquery.getstats.php">SolrQuery::getStats</a> — Returns whether or not stats is enabled</li><li><a href="solrquery.getstatsfacets.php">SolrQuery::getStatsFacets</a> — Returns all the stats facets that were set</li><li><a href="solrquery.getstatsfields.php">SolrQuery::getStatsFields</a> — Returns all the statistics fields</li><li><a href="solrquery.getterms.php">SolrQuery::getTerms</a> — Returns whether or not the TermsComponent is enabled</li><li><a href="solrquery.gettermsfield.php">SolrQuery::getTermsField</a> — Returns the field from which the terms are retrieved</li><li><a href="solrquery.gettermsincludelowerbound.php">SolrQuery::getTermsIncludeLowerBound</a> — Returns whether or not to include the lower bound in the result set</li><li><a href="solrquery.gettermsincludeupperbound.php">SolrQuery::getTermsIncludeUpperBound</a> — Returns whether or not to include the upper bound term in the result set</li><li><a href="solrquery.gettermslimit.php">SolrQuery::getTermsLimit</a> — Returns the maximum number of terms Solr should return</li><li><a href="solrquery.gettermslowerbound.php">SolrQuery::getTermsLowerBound</a> — Returns the term to start at</li><li><a href="solrquery.gettermsmaxcount.php">SolrQuery::getTermsMaxCount</a> — Returns the maximum document frequency</li><li><a href="solrquery.gettermsmincount.php">SolrQuery::getTermsMinCount</a> — Returns the minimum document frequency to return in order to be included</li><li><a href="solrquery.gettermsprefix.php">SolrQuery::getTermsPrefix</a> — Returns the term prefix</li><li><a href="solrquery.gettermsreturnraw.php">SolrQuery::getTermsReturnRaw</a> — Whether or not to return raw characters</li><li><a href="solrquery.gettermssort.php">SolrQuery::getTermsSort</a> — Returns an integer indicating how terms are sorted</li><li><a href="solrquery.gettermsupperbound.php">SolrQuery::getTermsUpperBound</a> — Returns the term to stop at</li><li><a href="solrquery.gettimeallowed.php">SolrQuery::getTimeAllowed</a> — Returns the time in milliseconds allowed for the query to finish</li><li><a href="solrquery.removeexpandfilterquery.php">SolrQuery::removeExpandFilterQuery</a> — Removes an expand filter query</li><li><a href="solrquery.removeexpandsortfield.php">SolrQuery::removeExpandSortField</a> — Removes an expand sort field from the expand.sort parameter</li><li><a href="solrquery.removefacetdatefield.php">SolrQuery::removeFacetDateField</a> — Removes one of the facet date fields</li><li><a href="solrquery.removefacetdateother.php">SolrQuery::removeFacetDateOther</a> — Removes one of the facet.date.other parameters</li><li><a href="solrquery.removefacetfield.php">SolrQuery::removeFacetField</a> — Removes one of the facet.date parameters</li><li><a href="solrquery.removefacetquery.php">SolrQuery::removeFacetQuery</a> — Removes one of the facet.query parameters</li><li><a href="solrquery.removefield.php">SolrQuery::removeField</a> — Removes a field from the list of fields</li><li><a href="solrquery.removefilterquery.php">SolrQuery::removeFilterQuery</a> — Removes a filter query</li><li><a href="solrquery.removehighlightfield.php">SolrQuery::removeHighlightField</a> — Removes one of the fields used for highlighting</li><li><a href="solrquery.removemltfield.php">SolrQuery::removeMltField</a> — Removes one of the moreLikeThis fields</li><li><a href="solrquery.removemltqueryfield.php">SolrQuery::removeMltQueryField</a> — Removes one of the moreLikeThis query fields</li><li><a href="solrquery.removesortfield.php">SolrQuery::removeSortField</a> — Removes one of the sort fields</li><li><a href="solrquery.removestatsfacet.php">SolrQuery::removeStatsFacet</a> — Removes one of the stats.facet parameters</li><li><a href="solrquery.removestatsfield.php">SolrQuery::removeStatsField</a> — Removes one of the stats.field parameters</li><li><a href="solrquery.setechohandler.php">SolrQuery::setEchoHandler</a> — Toggles the echoHandler parameter</li><li><a href="solrquery.setechoparams.php">SolrQuery::setEchoParams</a> — Determines what kind of parameters to include in the response</li><li><a href="solrquery.setexpand.php">SolrQuery::setExpand</a> — Enables/Disables the Expand Component</li><li><a href="solrquery.setexpandquery.php">SolrQuery::setExpandQuery</a> — Sets the expand.q parameter</li><li><a href="solrquery.setexpandrows.php">SolrQuery::setExpandRows</a> — Sets the number of rows to display in each group (expand.rows). Server Default 5</li><li><a href="solrquery.setexplainother.php">SolrQuery::setExplainOther</a> — Sets the explainOther common query parameter</li><li><a href="solrquery.setfacet.php">SolrQuery::setFacet</a> — Maps to the facet parameter. Enables or disables facetting</li><li><a href="solrquery.setfacetdateend.php">SolrQuery::setFacetDateEnd</a> — Maps to facet.date.end</li><li><a href="solrquery.setfacetdategap.php">SolrQuery::setFacetDateGap</a> — Maps to facet.date.gap</li><li><a href="solrquery.setfacetdatehardend.php">SolrQuery::setFacetDateHardEnd</a> — Maps to facet.date.hardend</li><li><a href="solrquery.setfacetdatestart.php">SolrQuery::setFacetDateStart</a> — Maps to facet.date.start</li><li><a href="solrquery.setfacetenumcachemindefaultfrequency.php">SolrQuery::setFacetEnumCacheMinDefaultFrequency</a> — Sets the minimum document frequency used for determining term count</li><li><a href="solrquery.setfacetlimit.php">SolrQuery::setFacetLimit</a> — Maps to facet.limit</li><li><a href="solrquery.setfacetmethod.php">SolrQuery::setFacetMethod</a> — Specifies the type of algorithm to use when faceting a field</li><li><a href="solrquery.setfacetmincount.php">SolrQuery::setFacetMinCount</a> — Maps to facet.mincount</li><li><a href="solrquery.setfacetmissing.php">SolrQuery::setFacetMissing</a> — Maps to facet.missing</li><li><a href="solrquery.setfacetoffset.php">SolrQuery::setFacetOffset</a> — Sets the offset into the list of constraints to allow for pagination</li><li><a href="solrquery.setfacetprefix.php">SolrQuery::setFacetPrefix</a> — Specifies a string prefix with which to limits the terms on which to facet</li><li><a href="solrquery.setfacetsort.php">SolrQuery::setFacetSort</a> — Determines the ordering of the facet field constraints</li><li><a href="solrquery.setgroup.php">SolrQuery::setGroup</a> — Enable/Disable result grouping (group parameter)</li><li><a href="solrquery.setgroupcachepercent.php">SolrQuery::setGroupCachePercent</a> — Enables caching for result grouping</li><li><a href="solrquery.setgroupfacet.php">SolrQuery::setGroupFacet</a> — Sets group.facet parameter</li><li><a href="solrquery.setgroupformat.php">SolrQuery::setGroupFormat</a> — Sets the group format, result structure (group.format parameter)</li><li><a href="solrquery.setgrouplimit.php">SolrQuery::setGroupLimit</a> — Specifies the number of results to return for each group. The server default value is 1</li><li><a href="solrquery.setgroupmain.php">SolrQuery::setGroupMain</a> — If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple</li><li><a href="solrquery.setgroupngroups.php">SolrQuery::setGroupNGroups</a> — If true, Solr includes the number of groups that have matched the query in the results</li><li><a href="solrquery.setgroupoffset.php">SolrQuery::setGroupOffset</a> — Sets the group.offset parameter</li><li><a href="solrquery.setgrouptruncate.php">SolrQuery::setGroupTruncate</a> — If true, facet counts are based on the most relevant document of each group matching the query</li><li><a href="solrquery.sethighlight.php">SolrQuery::setHighlight</a> — Enables or disables highlighting</li><li><a href="solrquery.sethighlightalternatefield.php">SolrQuery::setHighlightAlternateField</a> — Specifies the backup field to use</li><li><a href="solrquery.sethighlightformatter.php">SolrQuery::setHighlightFormatter</a> — Specify a formatter for the highlight output</li><li><a href="solrquery.sethighlightfragmenter.php">SolrQuery::setHighlightFragmenter</a> — Sets a text snippet generator for highlighted text</li><li><a href="solrquery.sethighlightfragsize.php">SolrQuery::setHighlightFragsize</a> — The size of fragments to consider for highlighting</li><li><a href="solrquery.sethighlighthighlightmultiterm.php">SolrQuery::setHighlightHighlightMultiTerm</a> — Use SpanScorer to highlight phrase terms</li><li><a href="solrquery.sethighlightmaxalternatefieldlength.php">SolrQuery::setHighlightMaxAlternateFieldLength</a> — Sets the maximum number of characters of the field to return</li><li><a href="solrquery.sethighlightmaxanalyzedchars.php">SolrQuery::setHighlightMaxAnalyzedChars</a> — Specifies the number of characters into a document to look for suitable snippets</li><li><a href="solrquery.sethighlightmergecontiguous.php">SolrQuery::setHighlightMergeContiguous</a> — Whether or not to collapse contiguous fragments into a single fragment</li><li><a href="solrquery.sethighlightquery.php">SolrQuery::setHighlightQuery</a> — A query designated for highlighting (hl.q)</li><li><a href="solrquery.sethighlightregexmaxanalyzedchars.php">SolrQuery::setHighlightRegexMaxAnalyzedChars</a> — Specify the maximum number of characters to analyze</li><li><a href="solrquery.sethighlightregexpattern.php">SolrQuery::setHighlightRegexPattern</a> — Specify the regular expression for fragmenting</li><li><a href="solrquery.sethighlightregexslop.php">SolrQuery::setHighlightRegexSlop</a> — Sets the factor by which the regex fragmenter can stray from the ideal fragment size</li><li><a href="solrquery.sethighlightrequirefieldmatch.php">SolrQuery::setHighlightRequireFieldMatch</a> — Require field matching during highlighting</li><li><a href="solrquery.sethighlightsimplepost.php">SolrQuery::setHighlightSimplePost</a> — Sets the text which appears after a highlighted term</li><li><a href="solrquery.sethighlightsimplepre.php">SolrQuery::setHighlightSimplePre</a> — Sets the text which appears before a highlighted term</li><li><a href="solrquery.sethighlightsnippets.php">SolrQuery::setHighlightSnippets</a> — Sets the maximum number of highlighted snippets to generate per field</li><li><a href="solrquery.sethighlightusephrasehighlighter.php">SolrQuery::setHighlightUsePhraseHighlighter</a> — Whether to highlight phrase terms only when they appear within the query phrase</li><li><a href="solrquery.setmlt.php">SolrQuery::setMlt</a> — Enables or disables moreLikeThis</li><li><a href="solrquery.setmltboost.php">SolrQuery::setMltBoost</a> — Set if the query will be boosted by the interesting term relevance</li><li><a href="solrquery.setmltcount.php">SolrQuery::setMltCount</a> — Set the number of similar documents to return for each result</li><li><a href="solrquery.setmltmaxnumqueryterms.php">SolrQuery::setMltMaxNumQueryTerms</a> — Sets the maximum number of query terms included</li><li><a href="solrquery.setmltmaxnumtokens.php">SolrQuery::setMltMaxNumTokens</a> — Specifies the maximum number of tokens to parse</li><li><a href="solrquery.setmltmaxwordlength.php">SolrQuery::setMltMaxWordLength</a> — Sets the maximum word length</li><li><a href="solrquery.setmltmindocfrequency.php">SolrQuery::setMltMinDocFrequency</a> — Sets the mltMinDoc frequency</li><li><a href="solrquery.setmltmintermfrequency.php">SolrQuery::setMltMinTermFrequency</a> — Sets the frequency below which terms will be ignored in the source docs</li><li><a href="solrquery.setmltminwordlength.php">SolrQuery::setMltMinWordLength</a> — Sets the minimum word length</li><li><a href="solrquery.setomitheader.php">SolrQuery::setOmitHeader</a> — Exclude the header from the returned results</li><li><a href="solrquery.setquery.php">SolrQuery::setQuery</a> — Sets the search query</li><li><a href="solrquery.setrows.php">SolrQuery::setRows</a> — Specifies the maximum number of rows to return in the result</li><li><a href="solrquery.setshowdebuginfo.php">SolrQuery::setShowDebugInfo</a> — Flag to show debug information</li><li><a href="solrquery.setstart.php">SolrQuery::setStart</a> — Specifies the number of rows to skip</li><li><a href="solrquery.setstats.php">SolrQuery::setStats</a> — Enables or disables the Stats component</li><li><a href="solrquery.setterms.php">SolrQuery::setTerms</a> — Enables or disables the TermsComponent</li><li><a href="solrquery.settermsfield.php">SolrQuery::setTermsField</a> — Sets the name of the field to get the Terms from</li><li><a href="solrquery.settermsincludelowerbound.php">SolrQuery::setTermsIncludeLowerBound</a> — Include the lower bound term in the result set</li><li><a href="solrquery.settermsincludeupperbound.php">SolrQuery::setTermsIncludeUpperBound</a> — Include the upper bound term in the result set</li><li><a href="solrquery.settermslimit.php">SolrQuery::setTermsLimit</a> — Sets the maximum number of terms to return</li><li><a href="solrquery.settermslowerbound.php">SolrQuery::setTermsLowerBound</a> — Specifies the Term to start from</li><li><a href="solrquery.settermsmaxcount.php">SolrQuery::setTermsMaxCount</a> — Sets the maximum document frequency</li><li><a href="solrquery.settermsmincount.php">SolrQuery::setTermsMinCount</a> — Sets the minimum document frequency</li><li><a href="solrquery.settermsprefix.php">SolrQuery::setTermsPrefix</a> — Restrict matches to terms that start with the prefix</li><li><a href="solrquery.settermsreturnraw.php">SolrQuery::setTermsReturnRaw</a> — Return the raw characters of the indexed term</li><li><a href="solrquery.settermssort.php">SolrQuery::setTermsSort</a> — Specifies how to sort the returned terms</li><li><a href="solrquery.settermsupperbound.php">SolrQuery::setTermsUpperBound</a> — Sets the term to stop at</li><li><a href="solrquery.settimeallowed.php">SolrQuery::setTimeAllowed</a> — The time allowed for search to finish</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/solrquery.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.solrquery%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.solrquery&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.solrquery.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107308">  <div class="votes">
    <div id="Vu107308">
    <a href="/manual/vote-note.php?id=107308&amp;page=class.solrquery&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107308">
    <a href="/manual/vote-note.php?id=107308&amp;page=class.solrquery&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107308" title="77% like this...">
    5
    </div>
  </div>
  <a href="#107308" class="name">
  <strong class="user"><em>andy at borkedcoder dot com</em></strong></a><a class="genanchor" href="#107308"> &para;</a><div class="date" title="2012-01-29 11:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107308">
<div class="phpcode"><code><span class="html">Note - if using morelikethis, and your query is on a numeric ID, then you will not be able to access the moreLikeThis object in the results...<br /><br />when q=id:3493 searching with mlt, result is:<br /><br />SolrObject Object<br />(<br />...<br />    [moreLikeThis] =&gt; SolrObject Object<br />        (<br />            [3493] =&gt; SolrObject Object<br />                (<br />                    [numFound] =&gt; 6286<br />                    [start] =&gt; 0<br />                    [docs] =&gt; Array<br />                        (<br />....etc<br /><br />the numeric object name (3493 above) is impossible to access<br /><br />not by $response-&gt;moreLikeThis-&gt;{3493} nor $response-&gt;moreLikeThis-&gt;{'3493'}, nothing...<br /><br />only way is to convert the moreLikeThis object into an array with:<br />$response_array = (array) $response-&gt;moreLikeThis;<br /><br />then iterate the array as the array key is known.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.solrquery&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.solrquery.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.solr.php">Solr</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.solr.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="solr.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="solr.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.solr.php" title="Solr Functions">Solr Functions</a>
                        </li>
                                                <li class="">
                            <a href="solr.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.solrutils.php" title="SolrUtils">SolrUtils</a>
                        </li>
                                                <li class="">
                            <a href="class.solrinputdocument.php" title="SolrInputDocument">SolrInputDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdocument.php" title="SolrDocument">SolrDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdocumentfield.php" title="SolrDocumentField">SolrDocumentField</a>
                        </li>
                                                <li class="">
                            <a href="class.solrobject.php" title="SolrObject">SolrObject</a>
                        </li>
                                                <li class="">
                            <a href="class.solrclient.php" title="SolrClient">SolrClient</a>
                        </li>
                                                <li class="">
                            <a href="class.solrresponse.php" title="SolrResponse">SolrResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrqueryresponse.php" title="SolrQueryResponse">SolrQueryResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrupdateresponse.php" title="SolrUpdateResponse">SolrUpdateResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrpingresponse.php" title="SolrPingResponse">SolrPingResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrgenericresponse.php" title="SolrGenericResponse">SolrGenericResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrparams.php" title="SolrParams">SolrParams</a>
                        </li>
                                                <li class="">
                            <a href="class.solrmodifiableparams.php" title="SolrModifiableParams">SolrModifiableParams</a>
                        </li>
                                                <li class="current">
                            <a href="class.solrquery.php" title="SolrQuery">SolrQuery</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdismaxquery.php" title="SolrDisMaxQuery">SolrDisMaxQuery</a>
                        </li>
                                                <li class="">
                            <a href="class.solrcollapsefunction.php" title="SolrCollapseFunction">SolrCollapseFunction</a>
                        </li>
                                                <li class="">
                            <a href="class.solrexception.php" title="SolrException">SolrException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrclientexception.php" title="SolrClientException">SolrClientException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrserverexception.php" title="SolrServerException">SolrServerException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrillegalargumentexception.php" title="SolrIllegalArgumentException">SolrIllegalArgumentException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrillegaloperationexception.php" title="SolrIllegalOperationException">SolrIllegalOperationException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrmissingmandatoryparameterexception.php" title="SolrMissingMandatoryParameterException">SolrMissingMandatoryParameterException</a>
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
