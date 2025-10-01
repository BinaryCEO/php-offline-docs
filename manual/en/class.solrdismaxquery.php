<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SolrDisMaxQuery - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.solrdismaxquery.php">
 <link rel="shorturl" href="https://www.php.net/solrdismaxquery">
 <link rel="alternate" href="https://www.php.net/solrdismaxquery" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="prev" href="https://www.php.net/manual/en/solrquery.settimeallowed.php">
 <link rel="next" href="https://www.php.net/manual/en/solrdismaxquery.addbigramphrasefield.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.solrdismaxquery.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.solrdismaxquery.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.solrdismaxquery.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.solrdismaxquery.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.solrdismaxquery.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.solrdismaxquery.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.solrdismaxquery.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.solrdismaxquery.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.solrdismaxquery.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.solrdismaxquery.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.solrdismaxquery.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SolrDisMaxQuery class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SolrDisMaxQuery - Manual" />
<meta name="twitter:description" content="The SolrDisMaxQuery class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SolrDisMaxQuery - Manual" />
<meta itemprop="description" content="The SolrDisMaxQuery class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SolrDisMaxQuery class" />

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
        <a href="solrdismaxquery.addbigramphrasefield.php">
          SolrDisMaxQuery::addBigramPhraseField &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="solrquery.settimeallowed.php">
          &laquo; SolrQuery::setTimeAllowed        </a>
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
            <option value='en/class.solrdismaxquery.php' selected="selected">English</option>
            <option value='de/class.solrdismaxquery.php'>German</option>
            <option value='es/class.solrdismaxquery.php'>Spanish</option>
            <option value='fr/class.solrdismaxquery.php'>French</option>
            <option value='it/class.solrdismaxquery.php'>Italian</option>
            <option value='ja/class.solrdismaxquery.php'>Japanese</option>
            <option value='pt_BR/class.solrdismaxquery.php'>Brazilian Portuguese</option>
            <option value='ru/class.solrdismaxquery.php'>Russian</option>
            <option value='tr/class.solrdismaxquery.php'>Turkish</option>
            <option value='uk/class.solrdismaxquery.php'>Ukrainian</option>
            <option value='zh/class.solrdismaxquery.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.solrdismaxquery" class="reference">

 <h1 class="title">The SolrDisMaxQuery class</h1>
 

 <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>


  <div class="section" id="solrdismaxquery.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="solrdismaxquery.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">SolrDisMaxQuery</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.solrquery.php" class="classname">SolrQuery</a>
     </span>
     
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.serializable.php" class="interfacename">Serializable</a></span> {</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.order-asc"><var class="varname">SolrQuery::ORDER_ASC</var></a></var><span class="initializer"> = 0</span>;</div>
<div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.order-desc"><var class="varname">SolrQuery::ORDER_DESC</var></a></var><span class="initializer"> = 1</span>;</div>
<div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.facet-sort-index"><var class="varname">SolrQuery::FACET_SORT_INDEX</var></a></var><span class="initializer"> = 0</span>;</div>
<div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.facet-sort-count"><var class="varname">SolrQuery::FACET_SORT_COUNT</var></a></var><span class="initializer"> = 1</span>;</div>
<div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.terms-sort-index"><var class="varname">SolrQuery::TERMS_SORT_INDEX</var></a></var><span class="initializer"> = 0</span>;</div>
<div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrquery.php#solrquery.constants.terms-sort-count"><var class="varname">SolrQuery::TERMS_SORT_COUNT</var></a></var><span class="initializer"> = 1</span>;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.addbigramphrasefield.php" class="methodname">addBigramPhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$boost</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.addboostquery.php" class="methodname">addBoostQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$boost</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.addphrasefield.php" class="methodname">addPhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$boost</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.addqueryfield.php" class="methodname">addQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$boost</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.addtrigramphrasefield.php" class="methodname">addTrigramPhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$boost</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.adduserfield.php" class="methodname">addUserField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removebigramphrasefield.php" class="methodname">removeBigramPhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removeboostquery.php" class="methodname">removeBoostQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removephrasefield.php" class="methodname">removePhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removequeryfield.php" class="methodname">removeQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removetrigramphrasefield.php" class="methodname">removeTrigramPhraseField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.removeuserfield.php" class="methodname">removeUserField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setbigramphrasefields.php" class="methodname">setBigramPhraseFields</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fields</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setbigramphraseslop.php" class="methodname">setBigramPhraseSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setboostfunction.php" class="methodname">setBoostFunction</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$function</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setboostquery.php" class="methodname">setBoostQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setminimummatch.php" class="methodname">setMinimumMatch</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setphrasefields.php" class="methodname">setPhraseFields</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fields</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setphraseslop.php" class="methodname">setPhraseSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setqueryalt.php" class="methodname">setQueryAlt</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setqueryphraseslop.php" class="methodname">setQueryPhraseSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.settiebreaker.php" class="methodname">setTieBreaker</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$tieBreaker</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.settrigramphrasefields.php" class="methodname">setTrigramPhraseFields</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fields</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.settrigramphraseslop.php" class="methodname">setTrigramPhraseSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$slop</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.setuserfields.php" class="methodname">setUserFields</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fields</code></span>): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.usedismaxqueryparser.php" class="methodname">useDisMaxQueryParser</a></span>(): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdismaxquery.useedismaxqueryparser.php" class="methodname">useEDisMaxQueryParser</a></span>(): <span class="type"><a href="class.solrdismaxquery.php" class="type SolrDisMaxQuery">SolrDisMaxQuery</a></span></div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addexpandfilterquery.php" class="methodname">SolrQuery::addExpandFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addexpandsortfield.php" class="methodname">SolrQuery::addExpandSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$order</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetdatefield.php" class="methodname">SolrQuery::addFacetDateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dateField</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetdateother.php" class="methodname">SolrQuery::addFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetfield.php" class="methodname">SolrQuery::addFacetField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfacetquery.php" class="methodname">SolrQuery::addFacetQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$facetQuery</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfield.php" class="methodname">SolrQuery::addField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addfilterquery.php" class="methodname">SolrQuery::addFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupfield.php" class="methodname">SolrQuery::addGroupField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupfunction.php" class="methodname">SolrQuery::addGroupFunction</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupquery.php" class="methodname">SolrQuery::addGroupQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addgroupsortfield.php" class="methodname">SolrQuery::addGroupSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$order</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addhighlightfield.php" class="methodname">SolrQuery::addHighlightField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addmltfield.php" class="methodname">SolrQuery::addMltField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addmltqueryfield.php" class="methodname">SolrQuery::addMltQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$boost</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addsortfield.php" class="methodname">SolrQuery::addSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$order</code><span class="initializer"> = SolrQuery::ORDER_DESC</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addstatsfacet.php" class="methodname">SolrQuery::addStatsFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.addstatsfield.php" class="methodname">SolrQuery::addStatsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.collapse.php" class="methodname">SolrQuery::collapse</a></span>(<span class="methodparam"><span class="type"><a href="class.solrcollapsefunction.php" class="type SolrCollapseFunction">SolrCollapseFunction</a></span> <code class="parameter">$collapseFunction</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpand.php" class="methodname">SolrQuery::getExpand</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandfilterqueries.php" class="methodname">SolrQuery::getExpandFilterQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandquery.php" class="methodname">SolrQuery::getExpandQuery</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandrows.php" class="methodname">SolrQuery::getExpandRows</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getexpandsortfields.php" class="methodname">SolrQuery::getExpandSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacet.php" class="methodname">SolrQuery::getFacet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdateend.php" class="methodname">SolrQuery::getFacetDateEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatefields.php" class="methodname">SolrQuery::getFacetDateFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdategap.php" class="methodname">SolrQuery::getFacetDateGap</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatehardend.php" class="methodname">SolrQuery::getFacetDateHardEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdateother.php" class="methodname">SolrQuery::getFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetdatestart.php" class="methodname">SolrQuery::getFacetDateStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetfields.php" class="methodname">SolrQuery::getFacetFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetlimit.php" class="methodname">SolrQuery::getFacetLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmethod.php" class="methodname">SolrQuery::getFacetMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmincount.php" class="methodname">SolrQuery::getFacetMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetmissing.php" class="methodname">SolrQuery::getFacetMissing</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetoffset.php" class="methodname">SolrQuery::getFacetOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetprefix.php" class="methodname">SolrQuery::getFacetPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetqueries.php" class="methodname">SolrQuery::getFacetQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfacetsort.php" class="methodname">SolrQuery::getFacetSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfields.php" class="methodname">SolrQuery::getFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getfilterqueries.php" class="methodname">SolrQuery::getFilterQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroup.php" class="methodname">SolrQuery::getGroup</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupcachepercent.php" class="methodname">SolrQuery::getGroupCachePercent</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfacet.php" class="methodname">SolrQuery::getGroupFacet</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfields.php" class="methodname">SolrQuery::getGroupFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupformat.php" class="methodname">SolrQuery::getGroupFormat</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupfunctions.php" class="methodname">SolrQuery::getGroupFunctions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgrouplimit.php" class="methodname">SolrQuery::getGroupLimit</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupmain.php" class="methodname">SolrQuery::getGroupMain</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupngroups.php" class="methodname">SolrQuery::getGroupNGroups</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupoffset.php" class="methodname">SolrQuery::getGroupOffset</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupqueries.php" class="methodname">SolrQuery::getGroupQueries</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgroupsortfields.php" class="methodname">SolrQuery::getGroupSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getgrouptruncate.php" class="methodname">SolrQuery::getGroupTruncate</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlight.php" class="methodname">SolrQuery::getHighlight</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightalternatefield.php" class="methodname">SolrQuery::getHighlightAlternateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfields.php" class="methodname">SolrQuery::getHighlightFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightformatter.php" class="methodname">SolrQuery::getHighlightFormatter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfragmenter.php" class="methodname">SolrQuery::getHighlightFragmenter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightfragsize.php" class="methodname">SolrQuery::getHighlightFragsize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlighthighlightmultiterm.php" class="methodname">SolrQuery::getHighlightHighlightMultiTerm</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmaxalternatefieldlength.php" class="methodname">SolrQuery::getHighlightMaxAlternateFieldLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmaxanalyzedchars.php" class="methodname">SolrQuery::getHighlightMaxAnalyzedChars</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightmergecontiguous.php" class="methodname">SolrQuery::getHighlightMergeContiguous</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightquery.php" class="methodname">SolrQuery::getHighlightQuery</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexmaxanalyzedchars.php" class="methodname">SolrQuery::getHighlightRegexMaxAnalyzedChars</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexpattern.php" class="methodname">SolrQuery::getHighlightRegexPattern</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightregexslop.php" class="methodname">SolrQuery::getHighlightRegexSlop</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightrequirefieldmatch.php" class="methodname">SolrQuery::getHighlightRequireFieldMatch</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsimplepost.php" class="methodname">SolrQuery::getHighlightSimplePost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsimplepre.php" class="methodname">SolrQuery::getHighlightSimplePre</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightsnippets.php" class="methodname">SolrQuery::getHighlightSnippets</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gethighlightusephrasehighlighter.php" class="methodname">SolrQuery::getHighlightUsePhraseHighlighter</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmlt.php" class="methodname">SolrQuery::getMlt</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltboost.php" class="methodname">SolrQuery::getMltBoost</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltcount.php" class="methodname">SolrQuery::getMltCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltfields.php" class="methodname">SolrQuery::getMltFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxnumqueryterms.php" class="methodname">SolrQuery::getMltMaxNumQueryTerms</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxnumtokens.php" class="methodname">SolrQuery::getMltMaxNumTokens</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmaxwordlength.php" class="methodname">SolrQuery::getMltMaxWordLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmindocfrequency.php" class="methodname">SolrQuery::getMltMinDocFrequency</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltmintermfrequency.php" class="methodname">SolrQuery::getMltMinTermFrequency</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltminwordlength.php" class="methodname">SolrQuery::getMltMinWordLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getmltqueryfields.php" class="methodname">SolrQuery::getMltQueryFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getquery.php" class="methodname">SolrQuery::getQuery</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getrows.php" class="methodname">SolrQuery::getRows</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getsortfields.php" class="methodname">SolrQuery::getSortFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstart.php" class="methodname">SolrQuery::getStart</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstats.php" class="methodname">SolrQuery::getStats</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstatsfacets.php" class="methodname">SolrQuery::getStatsFacets</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getstatsfields.php" class="methodname">SolrQuery::getStatsFields</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.getterms.php" class="methodname">SolrQuery::getTerms</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsfield.php" class="methodname">SolrQuery::getTermsField</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsincludelowerbound.php" class="methodname">SolrQuery::getTermsIncludeLowerBound</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsincludeupperbound.php" class="methodname">SolrQuery::getTermsIncludeUpperBound</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermslimit.php" class="methodname">SolrQuery::getTermsLimit</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermslowerbound.php" class="methodname">SolrQuery::getTermsLowerBound</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsmaxcount.php" class="methodname">SolrQuery::getTermsMaxCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsmincount.php" class="methodname">SolrQuery::getTermsMinCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsprefix.php" class="methodname">SolrQuery::getTermsPrefix</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsreturnraw.php" class="methodname">SolrQuery::getTermsReturnRaw</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermssort.php" class="methodname">SolrQuery::getTermsSort</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettermsupperbound.php" class="methodname">SolrQuery::getTermsUpperBound</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.gettimeallowed.php" class="methodname">SolrQuery::getTimeAllowed</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removeexpandfilterquery.php" class="methodname">SolrQuery::removeExpandFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removeexpandsortfield.php" class="methodname">SolrQuery::removeExpandSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetdatefield.php" class="methodname">SolrQuery::removeFacetDateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetdateother.php" class="methodname">SolrQuery::removeFacetDateOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetfield.php" class="methodname">SolrQuery::removeFacetField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefacetquery.php" class="methodname">SolrQuery::removeFacetQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefield.php" class="methodname">SolrQuery::removeField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removefilterquery.php" class="methodname">SolrQuery::removeFilterQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fq</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removehighlightfield.php" class="methodname">SolrQuery::removeHighlightField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removemltfield.php" class="methodname">SolrQuery::removeMltField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removemltqueryfield.php" class="methodname">SolrQuery::removeMltQueryField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$queryField</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removesortfield.php" class="methodname">SolrQuery::removeSortField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removestatsfacet.php" class="methodname">SolrQuery::removeStatsFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.removestatsfield.php" class="methodname">SolrQuery::removeStatsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setechohandler.php" class="methodname">SolrQuery::setEchoHandler</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setechoparams.php" class="methodname">SolrQuery::setEchoParams</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpand.php" class="methodname">SolrQuery::setExpand</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpandquery.php" class="methodname">SolrQuery::setExpandQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexpandrows.php" class="methodname">SolrQuery::setExpandRows</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setexplainother.php" class="methodname">SolrQuery::setExplainOther</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacet.php" class="methodname">SolrQuery::setFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdateend.php" class="methodname">SolrQuery::setFacetDateEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdategap.php" class="methodname">SolrQuery::setFacetDateGap</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdatehardend.php" class="methodname">SolrQuery::setFacetDateHardEnd</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetdatestart.php" class="methodname">SolrQuery::setFacetDateStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetenumcachemindefaultfrequency.php" class="methodname">SolrQuery::setFacetEnumCacheMinDefaultFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetlimit.php" class="methodname">SolrQuery::setFacetLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmethod.php" class="methodname">SolrQuery::setFacetMethod</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmincount.php" class="methodname">SolrQuery::setFacetMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mincount</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetmissing.php" class="methodname">SolrQuery::setFacetMissing</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetoffset.php" class="methodname">SolrQuery::setFacetOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetprefix.php" class="methodname">SolrQuery::setFacetPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setfacetsort.php" class="methodname">SolrQuery::setFacetSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$facetSort</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroup.php" class="methodname">SolrQuery::setGroup</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupcachepercent.php" class="methodname">SolrQuery::setGroupCachePercent</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$percent</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupfacet.php" class="methodname">SolrQuery::setGroupFacet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupformat.php" class="methodname">SolrQuery::setGroupFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgrouplimit.php" class="methodname">SolrQuery::setGroupLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupmain.php" class="methodname">SolrQuery::setGroupMain</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupngroups.php" class="methodname">SolrQuery::setGroupNGroups</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgroupoffset.php" class="methodname">SolrQuery::setGroupOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setgrouptruncate.php" class="methodname">SolrQuery::setGroupTruncate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlight.php" class="methodname">SolrQuery::setHighlight</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightalternatefield.php" class="methodname">SolrQuery::setHighlightAlternateField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightformatter.php" class="methodname">SolrQuery::setHighlightFormatter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$formatter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightfragmenter.php" class="methodname">SolrQuery::setHighlightFragmenter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fragmenter</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightfragsize.php" class="methodname">SolrQuery::setHighlightFragsize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlighthighlightmultiterm.php" class="methodname">SolrQuery::setHighlightHighlightMultiTerm</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmaxalternatefieldlength.php" class="methodname">SolrQuery::setHighlightMaxAlternateFieldLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$fieldLength</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmaxanalyzedchars.php" class="methodname">SolrQuery::setHighlightMaxAnalyzedChars</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightmergecontiguous.php" class="methodname">SolrQuery::setHighlightMergeContiguous</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightquery.php" class="methodname">SolrQuery::setHighlightQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexmaxanalyzedchars.php" class="methodname">SolrQuery::setHighlightRegexMaxAnalyzedChars</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxAnalyzedChars</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexpattern.php" class="methodname">SolrQuery::setHighlightRegexPattern</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightregexslop.php" class="methodname">SolrQuery::setHighlightRegexSlop</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$factor</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightrequirefieldmatch.php" class="methodname">SolrQuery::setHighlightRequireFieldMatch</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsimplepost.php" class="methodname">SolrQuery::setHighlightSimplePost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$simplePost</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsimplepre.php" class="methodname">SolrQuery::setHighlightSimplePre</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$simplePre</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightsnippets.php" class="methodname">SolrQuery::setHighlightSnippets</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$field_override</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.sethighlightusephrasehighlighter.php" class="methodname">SolrQuery::setHighlightUsePhraseHighlighter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmlt.php" class="methodname">SolrQuery::setMlt</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltboost.php" class="methodname">SolrQuery::setMltBoost</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltcount.php" class="methodname">SolrQuery::setMltCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$count</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxnumqueryterms.php" class="methodname">SolrQuery::setMltMaxNumQueryTerms</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxnumtokens.php" class="methodname">SolrQuery::setMltMaxNumTokens</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmaxwordlength.php" class="methodname">SolrQuery::setMltMaxWordLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxWordLength</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmindocfrequency.php" class="methodname">SolrQuery::setMltMinDocFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minDocFrequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltmintermfrequency.php" class="methodname">SolrQuery::setMltMinTermFrequency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minTermFrequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setmltminwordlength.php" class="methodname">SolrQuery::setMltMinWordLength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minWordLength</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setomitheader.php" class="methodname">SolrQuery::setOmitHeader</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setquery.php" class="methodname">SolrQuery::setQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setrows.php" class="methodname">SolrQuery::setRows</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rows</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setshowdebuginfo.php" class="methodname">SolrQuery::setShowDebugInfo</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setstart.php" class="methodname">SolrQuery::setStart</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setstats.php" class="methodname">SolrQuery::setStats</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.setterms.php" class="methodname">SolrQuery::setTerms</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsfield.php" class="methodname">SolrQuery::setTermsField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldname</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsincludelowerbound.php" class="methodname">SolrQuery::setTermsIncludeLowerBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsincludeupperbound.php" class="methodname">SolrQuery::setTermsIncludeUpperBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermslimit.php" class="methodname">SolrQuery::setTermsLimit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermslowerbound.php" class="methodname">SolrQuery::setTermsLowerBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$lowerBound</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsmaxcount.php" class="methodname">SolrQuery::setTermsMaxCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsmincount.php" class="methodname">SolrQuery::setTermsMinCount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$frequency</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsprefix.php" class="methodname">SolrQuery::setTermsPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsreturnraw.php" class="methodname">SolrQuery::setTermsReturnRaw</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$flag</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermssort.php" class="methodname">SolrQuery::setTermsSort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$sortType</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settermsupperbound.php" class="methodname">SolrQuery::setTermsUpperBound</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$upperBound</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrquery.settimeallowed.php" class="methodname">SolrQuery::setTimeAllowed</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeAllowed</code></span>): <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></div>


   }</div>


  </div>
  

  <div class="section" id="solrdismaxquery.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="solrdismaxquery.constants.order-asc"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.order-asc">SolrDisMaxQuery::ORDER_ASC</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the sorting should be in acending order (Duplicated for easier migration)</p>
     </dd>
    

    
     <dt id="solrdismaxquery.constants.order-desc"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.order-desc">SolrDisMaxQuery::ORDER_DESC</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the sorting should be in descending order (Duplicated for easier migration)</p>
     </dd>
    

    
     <dt id="solrdismaxquery.constants.facet-sort-index"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.facet-sort-index">SolrDisMaxQuery::FACET_SORT_INDEX</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the facet should sort by index (Duplicated for easier migration)</p>
     </dd>
    

    
     <dt id="solrdismaxquery.constants.facet-sort-count"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.facet-sort-count">SolrDisMaxQuery::FACET_SORT_COUNT</a></code></strong></dt>
     <dd>
      <p class="para">Used to specify that the facet should sort by count (Duplicated for easier migration)</p>
     </dd>
    

    
     <dt id="solrdismaxquery.constants.terms-sort-index"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.terms-sort-index">SolrDisMaxQuery::TERMS_SORT_INDEX</a></code></strong></dt>
     <dd>
      <p class="para">Used in the TermsComponent (Duplicated for easier migration)</p>
     </dd>
    

    
     <dt id="solrdismaxquery.constants.terms-sort-count"><strong><code><a href="class.solrdismaxquery.php#solrdismaxquery.constants.terms-sort-count">SolrDisMaxQuery::TERMS_SORT_COUNT</a></code></strong></dt>
     <dd>
      <p class="para">Used in the TermsComponent (Duplicated for easier migration)</p>
     </dd>
    

   </dl>
  </div>



 </div>

 
 






 






 






 






 






 






 





 






 




















 













 






 





 





 






 






 






 





 






 






 






 






 






 






 






 





<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="solrdismaxquery.addbigramphrasefield.php">SolrDisMaxQuery::addBigramPhraseField</a> — Adds a Phrase Bigram Field (pf2 parameter)</li><li><a href="solrdismaxquery.addboostquery.php">SolrDisMaxQuery::addBoostQuery</a> — Adds a boost query field with value and optional boost (bq parameter)</li><li><a href="solrdismaxquery.addphrasefield.php">SolrDisMaxQuery::addPhraseField</a> — Adds a Phrase Field (pf parameter)</li><li><a href="solrdismaxquery.addqueryfield.php">SolrDisMaxQuery::addQueryField</a> — Add a query field with optional boost (qf parameter)</li><li><a href="solrdismaxquery.addtrigramphrasefield.php">SolrDisMaxQuery::addTrigramPhraseField</a> — Adds a Trigram Phrase Field (pf3 parameter)</li><li><a href="solrdismaxquery.adduserfield.php">SolrDisMaxQuery::addUserField</a> — Adds a field to User Fields Parameter (uf)</li><li><a href="solrdismaxquery.construct.php">SolrDisMaxQuery::__construct</a> — Class Constructor</li><li><a href="solrdismaxquery.removebigramphrasefield.php">SolrDisMaxQuery::removeBigramPhraseField</a> — Removes phrase bigram field (pf2 parameter)</li><li><a href="solrdismaxquery.removeboostquery.php">SolrDisMaxQuery::removeBoostQuery</a> — Removes a boost query partial by field name (bq)</li><li><a href="solrdismaxquery.removephrasefield.php">SolrDisMaxQuery::removePhraseField</a> — Removes a Phrase Field (pf parameter)</li><li><a href="solrdismaxquery.removequeryfield.php">SolrDisMaxQuery::removeQueryField</a> — Removes a Query Field (qf parameter)</li><li><a href="solrdismaxquery.removetrigramphrasefield.php">SolrDisMaxQuery::removeTrigramPhraseField</a> — Removes a Trigram Phrase Field (pf3 parameter)</li><li><a href="solrdismaxquery.removeuserfield.php">SolrDisMaxQuery::removeUserField</a> — Removes a field from The User Fields Parameter (uf)</li><li><a href="solrdismaxquery.setbigramphrasefields.php">SolrDisMaxQuery::setBigramPhraseFields</a> — Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter</li><li><a href="solrdismaxquery.setbigramphraseslop.php">SolrDisMaxQuery::setBigramPhraseSlop</a> — Sets Bigram Phrase Slop (ps2 parameter)</li><li><a href="solrdismaxquery.setboostfunction.php">SolrDisMaxQuery::setBoostFunction</a> — Sets a Boost Function (bf parameter)</li><li><a href="solrdismaxquery.setboostquery.php">SolrDisMaxQuery::setBoostQuery</a> — Directly Sets Boost Query Parameter (bq)</li><li><a href="solrdismaxquery.setminimummatch.php">SolrDisMaxQuery::setMinimumMatch</a> — Set Minimum &quot;Should&quot; Match (mm)</li><li><a href="solrdismaxquery.setphrasefields.php">SolrDisMaxQuery::setPhraseFields</a> — Sets  Phrase Fields and their boosts (and slops) using pf2 parameter</li><li><a href="solrdismaxquery.setphraseslop.php">SolrDisMaxQuery::setPhraseSlop</a> — Sets the default slop on phrase queries (ps parameter)</li><li><a href="solrdismaxquery.setqueryalt.php">SolrDisMaxQuery::setQueryAlt</a> — Set Query Alternate (q.alt parameter)</li><li><a href="solrdismaxquery.setqueryphraseslop.php">SolrDisMaxQuery::setQueryPhraseSlop</a> — Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)</li><li><a href="solrdismaxquery.settiebreaker.php">SolrDisMaxQuery::setTieBreaker</a> — Sets Tie Breaker parameter (tie parameter)</li><li><a href="solrdismaxquery.settrigramphrasefields.php">SolrDisMaxQuery::setTrigramPhraseFields</a> — Directly Sets Trigram Phrase Fields (pf3 parameter)</li><li><a href="solrdismaxquery.settrigramphraseslop.php">SolrDisMaxQuery::setTrigramPhraseSlop</a> — Sets Trigram Phrase Slop (ps3 parameter)</li><li><a href="solrdismaxquery.setuserfields.php">SolrDisMaxQuery::setUserFields</a> — Sets User Fields parameter (uf)</li><li><a href="solrdismaxquery.usedismaxqueryparser.php">SolrDisMaxQuery::useDisMaxQueryParser</a> — Switch QueryParser to be DisMax Query Parser</li><li><a href="solrdismaxquery.useedismaxqueryparser.php">SolrDisMaxQuery::useEDisMaxQueryParser</a> — Switch QueryParser to be EDisMax</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/solrdismaxquery.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.solrdismaxquery%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.solrdismaxquery&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.solrdismaxquery.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="class.solrquery.php" title="SolrQuery">SolrQuery</a>
                        </li>
                                                <li class="current">
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
