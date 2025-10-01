<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SolrDocument - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.solrdocument.php">
 <link rel="shorturl" href="https://www.php.net/solrdocument">
 <link rel="alternate" href="https://www.php.net/solrdocument" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="prev" href="https://www.php.net/manual/en/solrinputdocument.toarray.php">
 <link rel="next" href="https://www.php.net/manual/en/solrdocument.addfield.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.solrdocument.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.solrdocument.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.solrdocument.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.solrdocument.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.solrdocument.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.solrdocument.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.solrdocument.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.solrdocument.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.solrdocument.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.solrdocument.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.solrdocument.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SolrDocument class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SolrDocument - Manual" />
<meta name="twitter:description" content="The SolrDocument class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SolrDocument - Manual" />
<meta itemprop="description" content="The SolrDocument class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SolrDocument class" />

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
        <a href="solrdocument.addfield.php">
          SolrDocument::addField &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="solrinputdocument.toarray.php">
          &laquo; SolrInputDocument::toArray        </a>
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
            <option value='en/class.solrdocument.php' selected="selected">English</option>
            <option value='de/class.solrdocument.php'>German</option>
            <option value='es/class.solrdocument.php'>Spanish</option>
            <option value='fr/class.solrdocument.php'>French</option>
            <option value='it/class.solrdocument.php'>Italian</option>
            <option value='ja/class.solrdocument.php'>Japanese</option>
            <option value='pt_BR/class.solrdocument.php'>Brazilian Portuguese</option>
            <option value='ru/class.solrdocument.php'>Russian</option>
            <option value='tr/class.solrdocument.php'>Turkish</option>
            <option value='uk/class.solrdocument.php'>Ukrainian</option>
            <option value='zh/class.solrdocument.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.solrdocument" class="reference">

 <h1 class="title">The SolrDocument class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>


  <div class="section" id="solrdocument.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a Solr document retrieved from a query response.
   </p>
  </div>


  <div class="section" id="solrdocument.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">SolrDocument</strong>
     </span>
     
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a></span><span class="oointerface">,  <a href="class.iterator.php" class="interfacename">Iterator</a></span><span class="oointerface">,  <a href="class.serializable.php" class="interfacename">Serializable</a></span> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-default"><var class="varname">SORT_DEFAULT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-asc"><var class="varname">SORT_ASC</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-desc"><var class="varname">SORT_DESC</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-field-name"><var class="varname">SORT_FIELD_NAME</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-field-value-count"><var class="varname">SORT_FIELD_VALUE_COUNT</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrdocument.php#solrdocument.constants.sort-field-boost-value"><var class="varname">SORT_FIELD_BOOST_VALUE</var></a></var><span class="initializer"> = 4</span>;</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="solrdocument.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.addfield.php" class="methodname">addField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldValue</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.clear.php" class="methodname">clear</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.clone.php" class="methodname">__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.current.php" class="methodname">current</a></span>(): <span class="type"><a href="class.solrdocumentfield.php" class="type SolrDocumentField">SolrDocumentField</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.deletefield.php" class="methodname">deleteField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.fieldexists.php" class="methodname">fieldExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.get.php" class="methodname">__get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="class.solrdocumentfield.php" class="type SolrDocumentField">SolrDocumentField</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getchilddocuments.php" class="methodname">getChildDocuments</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getchilddocumentscount.php" class="methodname">getChildDocumentsCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getfield.php" class="methodname">getField</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="class.solrdocumentfield.php" class="type SolrDocumentField">SolrDocumentField</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getfieldcount.php" class="methodname">getFieldCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getfieldnames.php" class="methodname">getFieldNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.getinputdocument.php" class="methodname">getInputDocument</a></span>(): <span class="type"><a href="class.solrinputdocument.php" class="type SolrInputDocument">SolrInputDocument</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.haschilddocuments.php" class="methodname">hasChildDocuments</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.isset.php" class="methodname">__isset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.merge.php" class="methodname">merge</a></span>(<span class="methodparam"><span class="type"><a href="class.solrdocument.php" class="type SolrDocument">SolrDocument</a></span> <code class="parameter">$sourceDoc</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="class.solrdocumentfield.php" class="type SolrDocumentField">SolrDocumentField</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldValue</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.reset.php" class="methodname">reset</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.serialize.php" class="methodname">serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.set.php" class="methodname">__set</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldValue</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.sort.php" class="methodname">sort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$sortOrderBy</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$sortDirection</code><span class="initializer"> = SolrDocument::SORT_ASC</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.toarray.php" class="methodname">toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.unserialize.php" class="methodname">unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$serialized</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.unset.php" class="methodname">__unset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$fieldName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrdocument.destruct.php" class="methodname">__destruct</a></span>()</div>

   }</div>


  </div>

  

  <div class="section" id="solrdocument.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="solrdocument.constants.sort-default"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-default">SolrDocument::SORT_DEFAULT</a></code></strong></dt>
     <dd>
      <p class="para">Default mode for sorting fields within the document.</p>
     </dd>
    

    
     <dt id="solrdocument.constants.sort-asc"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-asc">SolrDocument::SORT_ASC</a></code></strong></dt>
     <dd>
      <p class="para">Sorts the fields in ascending order</p>
     </dd>
    

    
     <dt id="solrdocument.constants.sort-desc"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-desc">SolrDocument::SORT_DESC</a></code></strong></dt>
     <dd>
      <p class="para">Sorts the fields in descending order</p>
     </dd>
    

    
     <dt id="solrdocument.constants.sort-field-name"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-field-name">SolrDocument::SORT_FIELD_NAME</a></code></strong></dt>
     <dd>
      <p class="para">Sorts the fields by field name.</p>
     </dd>
    

    
     <dt id="solrdocument.constants.sort-field-value-count"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-field-value-count">SolrDocument::SORT_FIELD_VALUE_COUNT</a></code></strong></dt>
     <dd>
      <p class="para">Sorts the fields by number of values in each field.</p>
     </dd>
    

    
     <dt id="solrdocument.constants.sort-field-boost-value"><strong><code><a href="class.solrdocument.php#solrdocument.constants.sort-field-boost-value">SolrDocument::SORT_FIELD_BOOST_VALUE</a></code></strong></dt>
     <dd>
      <p class="para">Sorts the fields by thier boost values.</p>
     </dd>
    

   </dl>
  </div>



 </div>

 







































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="solrdocument.addfield.php">SolrDocument::addField</a> — Adds a field to the document</li><li><a href="solrdocument.clear.php">SolrDocument::clear</a> — Drops all the fields in the document</li><li><a href="solrdocument.clone.php">SolrDocument::__clone</a> — Creates a copy of a SolrDocument object</li><li><a href="solrdocument.construct.php">SolrDocument::__construct</a> — Constructor</li><li><a href="solrdocument.current.php">SolrDocument::current</a> — Retrieves the current field</li><li><a href="solrdocument.deletefield.php">SolrDocument::deleteField</a> — Removes a field from the document</li><li><a href="solrdocument.destruct.php">SolrDocument::__destruct</a> — Destructor</li><li><a href="solrdocument.fieldexists.php">SolrDocument::fieldExists</a> — Checks if a field exists in the document</li><li><a href="solrdocument.get.php">SolrDocument::__get</a> — Access the field as a property</li><li><a href="solrdocument.getchilddocuments.php">SolrDocument::getChildDocuments</a> — Returns an array of child documents (SolrDocument)</li><li><a href="solrdocument.getchilddocumentscount.php">SolrDocument::getChildDocumentsCount</a> — Returns the number of child documents</li><li><a href="solrdocument.getfield.php">SolrDocument::getField</a> — Retrieves a field by name</li><li><a href="solrdocument.getfieldcount.php">SolrDocument::getFieldCount</a> — Returns the number of fields in this document</li><li><a href="solrdocument.getfieldnames.php">SolrDocument::getFieldNames</a> — Returns an array of fields names in the document</li><li><a href="solrdocument.getinputdocument.php">SolrDocument::getInputDocument</a> — Returns a SolrInputDocument equivalent of the object</li><li><a href="solrdocument.haschilddocuments.php">SolrDocument::hasChildDocuments</a> — Checks whether the document has any child documents</li><li><a href="solrdocument.isset.php">SolrDocument::__isset</a> — Checks if a field exists</li><li><a href="solrdocument.key.php">SolrDocument::key</a> — Retrieves the current key</li><li><a href="solrdocument.merge.php">SolrDocument::merge</a> — Merges source to the current SolrDocument</li><li><a href="solrdocument.next.php">SolrDocument::next</a> — Moves the internal pointer to the next field</li><li><a href="solrdocument.offsetexists.php">SolrDocument::offsetExists</a> — Checks if a particular field exists</li><li><a href="solrdocument.offsetget.php">SolrDocument::offsetGet</a> — Retrieves a field</li><li><a href="solrdocument.offsetset.php">SolrDocument::offsetSet</a> — Adds a field to the document</li><li><a href="solrdocument.offsetunset.php">SolrDocument::offsetUnset</a> — Removes a field</li><li><a href="solrdocument.reset.php">SolrDocument::reset</a> — Alias of SolrDocument::clear</li><li><a href="solrdocument.rewind.php">SolrDocument::rewind</a> — Resets the internal pointer to the beginning</li><li><a href="solrdocument.serialize.php">SolrDocument::serialize</a> — Used for custom serialization</li><li><a href="solrdocument.set.php">SolrDocument::__set</a> — Adds another field to the document</li><li><a href="solrdocument.sort.php">SolrDocument::sort</a> — Sorts the fields in the document</li><li><a href="solrdocument.toarray.php">SolrDocument::toArray</a> — Returns an array representation of the document</li><li><a href="solrdocument.unserialize.php">SolrDocument::unserialize</a> — Custom serialization of SolrDocument objects</li><li><a href="solrdocument.unset.php">SolrDocument::__unset</a> — Removes a field from the document</li><li><a href="solrdocument.valid.php">SolrDocument::valid</a> — Checks if the current position internally is still valid</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/solrdocument.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.solrdocument%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.solrdocument&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.solrdocument.php">＋<small>add a note</small></a></span>
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
                                                <li class="current">
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
