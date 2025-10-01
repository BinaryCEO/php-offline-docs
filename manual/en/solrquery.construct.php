<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SolrQuery::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/solrquery.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/solrquery.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/solrquery.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.solrquery.php">
 <link rel="prev" href="https://www.php.net/manual/en/solrquery.collapse.php">
 <link rel="next" href="https://www.php.net/manual/en/solrquery.destruct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/solrquery.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/solrquery.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/solrquery.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/solrquery.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/solrquery.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/solrquery.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/solrquery.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/solrquery.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/solrquery.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/solrquery.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/solrquery.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Constructor" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SolrQuery::__construct - Manual" />
<meta name="twitter:description" content="Constructor" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SolrQuery::__construct - Manual" />
<meta itemprop="description" content="Constructor" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Constructor" />

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
        <a href="solrquery.destruct.php">
          SolrQuery::__destruct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="solrquery.collapse.php">
          &laquo; SolrQuery::collapse        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.search.php'>Search Engine Extensions</a></li>      <li><a href='book.solr.php'>Solr</a></li>      <li><a href='class.solrquery.php'>SolrQuery</a></li>      </ul>
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
            <option value='en/solrquery.construct.php' selected="selected">English</option>
            <option value='de/solrquery.construct.php'>German</option>
            <option value='es/solrquery.construct.php'>Spanish</option>
            <option value='fr/solrquery.construct.php'>French</option>
            <option value='it/solrquery.construct.php'>Italian</option>
            <option value='ja/solrquery.construct.php'>Japanese</option>
            <option value='pt_BR/solrquery.construct.php'>Brazilian Portuguese</option>
            <option value='ru/solrquery.construct.php'>Russian</option>
            <option value='tr/solrquery.construct.php'>Turkish</option>
            <option value='uk/solrquery.construct.php'>Ukrainian</option>
            <option value='zh/solrquery.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="solrquery.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SolrQuery::__construct</h1>
  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrQuery::__construct</span> &mdash; <span class="dc-title">Constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-solrquery.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SolrQuery::__construct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$q</code><span class="initializer"> = ?</span></span>)</div>

  <p class="para rdfs-comment">
   Constructor.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-solrquery.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">q</code></dt>
     <dd>
      <p class="para">
       Optional search query
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-solrquery.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   None
  </p>
 </div>

<div class="refsect1 errors" id="refsect1-solrquery.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Emits <span class="classname"><a href="class.solrillegalargumentexception.php" class="classname">SolrIllegalArgumentException</a></span> in case of an invalid parameter was passed.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-solrquery.construct-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>PECL solr 2.0.0</td>
       <td>
        If <code class="parameter">q</code> was invalid, then a
        <span class="classname"><a href="class.solrillegalargumentexception.php" class="classname">SolrIllegalArgumentException</a></span> is now thrown. Previously an error was emitted.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/solrquery/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsolrquery.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=solrquery.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/solrquery.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.solrquery.php">SolrQuery</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="solrquery.addexpandfilterquery.php" title="addExpandFilterQuery">addExpandFilterQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addexpandsortfield.php" title="addExpandSortField">addExpandSortField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfacetdatefield.php" title="addFacetDateField">addFacetDateField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfacetdateother.php" title="addFacetDateOther">addFacetDateOther</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfacetfield.php" title="addFacetField">addFacetField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfacetquery.php" title="addFacetQuery">addFacetQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfield.php" title="addField">addField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addfilterquery.php" title="addFilterQuery">addFilterQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addgroupfield.php" title="addGroupField">addGroupField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addgroupfunction.php" title="addGroupFunction">addGroupFunction</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addgroupquery.php" title="addGroupQuery">addGroupQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addgroupsortfield.php" title="addGroupSortField">addGroupSortField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addhighlightfield.php" title="addHighlightField">addHighlightField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addmltfield.php" title="addMltField">addMltField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addmltqueryfield.php" title="addMltQueryField">addMltQueryField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addsortfield.php" title="addSortField">addSortField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addstatsfacet.php" title="addStatsFacet">addStatsFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.addstatsfield.php" title="addStatsField">addStatsField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.collapse.php" title="collapse">collapse</a>
                        </li>
                                                <li class="current">
                            <a href="solrquery.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.destruct.php" title="_&#8203;_&#8203;destruct">_&#8203;_&#8203;destruct</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getexpand.php" title="getExpand">getExpand</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getexpandfilterqueries.php" title="getExpandFilterQueries">getExpandFilterQueries</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getexpandquery.php" title="getExpandQuery">getExpandQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getexpandrows.php" title="getExpandRows">getExpandRows</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getexpandsortfields.php" title="getExpandSortFields">getExpandSortFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacet.php" title="getFacet">getFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdateend.php" title="getFacetDateEnd">getFacetDateEnd</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdatefields.php" title="getFacetDateFields">getFacetDateFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdategap.php" title="getFacetDateGap">getFacetDateGap</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdatehardend.php" title="getFacetDateHardEnd">getFacetDateHardEnd</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdateother.php" title="getFacetDateOther">getFacetDateOther</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetdatestart.php" title="getFacetDateStart">getFacetDateStart</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetfields.php" title="getFacetFields">getFacetFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetlimit.php" title="getFacetLimit">getFacetLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetmethod.php" title="getFacetMethod">getFacetMethod</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetmincount.php" title="getFacetMinCount">getFacetMinCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetmissing.php" title="getFacetMissing">getFacetMissing</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetoffset.php" title="getFacetOffset">getFacetOffset</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetprefix.php" title="getFacetPrefix">getFacetPrefix</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetqueries.php" title="getFacetQueries">getFacetQueries</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfacetsort.php" title="getFacetSort">getFacetSort</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfields.php" title="getFields">getFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getfilterqueries.php" title="getFilterQueries">getFilterQueries</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroup.php" title="getGroup">getGroup</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupcachepercent.php" title="getGroupCachePercent">getGroupCachePercent</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupfacet.php" title="getGroupFacet">getGroupFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupfields.php" title="getGroupFields">getGroupFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupformat.php" title="getGroupFormat">getGroupFormat</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupfunctions.php" title="getGroupFunctions">getGroupFunctions</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgrouplimit.php" title="getGroupLimit">getGroupLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupmain.php" title="getGroupMain">getGroupMain</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupngroups.php" title="getGroupNGroups">getGroupNGroups</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupoffset.php" title="getGroupOffset">getGroupOffset</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupqueries.php" title="getGroupQueries">getGroupQueries</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgroupsortfields.php" title="getGroupSortFields">getGroupSortFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getgrouptruncate.php" title="getGroupTruncate">getGroupTruncate</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlight.php" title="getHighlight">getHighlight</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightalternatefield.php" title="getHighlightAlternateField">getHighlightAlternateField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightfields.php" title="getHighlightFields">getHighlightFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightformatter.php" title="getHighlightFormatter">getHighlightFormatter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightfragmenter.php" title="getHighlightFragmenter">getHighlightFragmenter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightfragsize.php" title="getHighlightFragsize">getHighlightFragsize</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlighthighlightmultiterm.php" title="getHighlightHighlightMultiTerm">getHighlightHighlightMultiTerm</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightmaxalternatefieldlength.php" title="getHighlightMaxAlternateFieldLength">getHighlightMaxAlternateFieldLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightmaxanalyzedchars.php" title="getHighlightMaxAnalyzedChars">getHighlightMaxAnalyzedChars</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightmergecontiguous.php" title="getHighlightMergeContiguous">getHighlightMergeContiguous</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightquery.php" title="getHighlightQuery">getHighlightQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightregexmaxanalyzedchars.php" title="getHighlightRegexMaxAnalyzedChars">getHighlightRegexMaxAnalyzedChars</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightregexpattern.php" title="getHighlightRegexPattern">getHighlightRegexPattern</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightregexslop.php" title="getHighlightRegexSlop">getHighlightRegexSlop</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightrequirefieldmatch.php" title="getHighlightRequireFieldMatch">getHighlightRequireFieldMatch</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightsimplepost.php" title="getHighlightSimplePost">getHighlightSimplePost</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightsimplepre.php" title="getHighlightSimplePre">getHighlightSimplePre</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightsnippets.php" title="getHighlightSnippets">getHighlightSnippets</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gethighlightusephrasehighlighter.php" title="getHighlightUsePhraseHighlighter">getHighlightUsePhraseHighlighter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmlt.php" title="getMlt">getMlt</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltboost.php" title="getMltBoost">getMltBoost</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltcount.php" title="getMltCount">getMltCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltfields.php" title="getMltFields">getMltFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltmaxnumqueryterms.php" title="getMltMaxNumQueryTerms">getMltMaxNumQueryTerms</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltmaxnumtokens.php" title="getMltMaxNumTokens">getMltMaxNumTokens</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltmaxwordlength.php" title="getMltMaxWordLength">getMltMaxWordLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltmindocfrequency.php" title="getMltMinDocFrequency">getMltMinDocFrequency</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltmintermfrequency.php" title="getMltMinTermFrequency">getMltMinTermFrequency</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltminwordlength.php" title="getMltMinWordLength">getMltMinWordLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getmltqueryfields.php" title="getMltQueryFields">getMltQueryFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getquery.php" title="getQuery">getQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getrows.php" title="getRows">getRows</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getsortfields.php" title="getSortFields">getSortFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getstart.php" title="getStart">getStart</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getstats.php" title="getStats">getStats</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getstatsfacets.php" title="getStatsFacets">getStatsFacets</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getstatsfields.php" title="getStatsFields">getStatsFields</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.getterms.php" title="getTerms">getTerms</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsfield.php" title="getTermsField">getTermsField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsincludelowerbound.php" title="getTermsIncludeLowerBound">getTermsIncludeLowerBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsincludeupperbound.php" title="getTermsIncludeUpperBound">getTermsIncludeUpperBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermslimit.php" title="getTermsLimit">getTermsLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermslowerbound.php" title="getTermsLowerBound">getTermsLowerBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsmaxcount.php" title="getTermsMaxCount">getTermsMaxCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsmincount.php" title="getTermsMinCount">getTermsMinCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsprefix.php" title="getTermsPrefix">getTermsPrefix</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsreturnraw.php" title="getTermsReturnRaw">getTermsReturnRaw</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermssort.php" title="getTermsSort">getTermsSort</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettermsupperbound.php" title="getTermsUpperBound">getTermsUpperBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.gettimeallowed.php" title="getTimeAllowed">getTimeAllowed</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removeexpandfilterquery.php" title="removeExpandFilterQuery">removeExpandFilterQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removeexpandsortfield.php" title="removeExpandSortField">removeExpandSortField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefacetdatefield.php" title="removeFacetDateField">removeFacetDateField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefacetdateother.php" title="removeFacetDateOther">removeFacetDateOther</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefacetfield.php" title="removeFacetField">removeFacetField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefacetquery.php" title="removeFacetQuery">removeFacetQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefield.php" title="removeField">removeField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removefilterquery.php" title="removeFilterQuery">removeFilterQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removehighlightfield.php" title="removeHighlightField">removeHighlightField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removemltfield.php" title="removeMltField">removeMltField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removemltqueryfield.php" title="removeMltQueryField">removeMltQueryField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removesortfield.php" title="removeSortField">removeSortField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removestatsfacet.php" title="removeStatsFacet">removeStatsFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.removestatsfield.php" title="removeStatsField">removeStatsField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setechohandler.php" title="setEchoHandler">setEchoHandler</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setechoparams.php" title="setEchoParams">setEchoParams</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setexpand.php" title="setExpand">setExpand</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setexpandquery.php" title="setExpandQuery">setExpandQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setexpandrows.php" title="setExpandRows">setExpandRows</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setexplainother.php" title="setExplainOther">setExplainOther</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacet.php" title="setFacet">setFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetdateend.php" title="setFacetDateEnd">setFacetDateEnd</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetdategap.php" title="setFacetDateGap">setFacetDateGap</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetdatehardend.php" title="setFacetDateHardEnd">setFacetDateHardEnd</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetdatestart.php" title="setFacetDateStart">setFacetDateStart</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetenumcachemindefaultfrequency.php" title="setFacetEnumCacheMinDefaultFrequency">setFacetEnumCacheMinDefaultFrequency</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetlimit.php" title="setFacetLimit">setFacetLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetmethod.php" title="setFacetMethod">setFacetMethod</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetmincount.php" title="setFacetMinCount">setFacetMinCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetmissing.php" title="setFacetMissing">setFacetMissing</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetoffset.php" title="setFacetOffset">setFacetOffset</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetprefix.php" title="setFacetPrefix">setFacetPrefix</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setfacetsort.php" title="setFacetSort">setFacetSort</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroup.php" title="setGroup">setGroup</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupcachepercent.php" title="setGroupCachePercent">setGroupCachePercent</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupfacet.php" title="setGroupFacet">setGroupFacet</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupformat.php" title="setGroupFormat">setGroupFormat</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgrouplimit.php" title="setGroupLimit">setGroupLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupmain.php" title="setGroupMain">setGroupMain</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupngroups.php" title="setGroupNGroups">setGroupNGroups</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgroupoffset.php" title="setGroupOffset">setGroupOffset</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setgrouptruncate.php" title="setGroupTruncate">setGroupTruncate</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlight.php" title="setHighlight">setHighlight</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightalternatefield.php" title="setHighlightAlternateField">setHighlightAlternateField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightformatter.php" title="setHighlightFormatter">setHighlightFormatter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightfragmenter.php" title="setHighlightFragmenter">setHighlightFragmenter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightfragsize.php" title="setHighlightFragsize">setHighlightFragsize</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlighthighlightmultiterm.php" title="setHighlightHighlightMultiTerm">setHighlightHighlightMultiTerm</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightmaxalternatefieldlength.php" title="setHighlightMaxAlternateFieldLength">setHighlightMaxAlternateFieldLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightmaxanalyzedchars.php" title="setHighlightMaxAnalyzedChars">setHighlightMaxAnalyzedChars</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightmergecontiguous.php" title="setHighlightMergeContiguous">setHighlightMergeContiguous</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightquery.php" title="setHighlightQuery">setHighlightQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightregexmaxanalyzedchars.php" title="setHighlightRegexMaxAnalyzedChars">setHighlightRegexMaxAnalyzedChars</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightregexpattern.php" title="setHighlightRegexPattern">setHighlightRegexPattern</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightregexslop.php" title="setHighlightRegexSlop">setHighlightRegexSlop</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightrequirefieldmatch.php" title="setHighlightRequireFieldMatch">setHighlightRequireFieldMatch</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightsimplepost.php" title="setHighlightSimplePost">setHighlightSimplePost</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightsimplepre.php" title="setHighlightSimplePre">setHighlightSimplePre</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightsnippets.php" title="setHighlightSnippets">setHighlightSnippets</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.sethighlightusephrasehighlighter.php" title="setHighlightUsePhraseHighlighter">setHighlightUsePhraseHighlighter</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmlt.php" title="setMlt">setMlt</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltboost.php" title="setMltBoost">setMltBoost</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltcount.php" title="setMltCount">setMltCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltmaxnumqueryterms.php" title="setMltMaxNumQueryTerms">setMltMaxNumQueryTerms</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltmaxnumtokens.php" title="setMltMaxNumTokens">setMltMaxNumTokens</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltmaxwordlength.php" title="setMltMaxWordLength">setMltMaxWordLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltmindocfrequency.php" title="setMltMinDocFrequency">setMltMinDocFrequency</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltmintermfrequency.php" title="setMltMinTermFrequency">setMltMinTermFrequency</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setmltminwordlength.php" title="setMltMinWordLength">setMltMinWordLength</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setomitheader.php" title="setOmitHeader">setOmitHeader</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setquery.php" title="setQuery">setQuery</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setrows.php" title="setRows">setRows</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setshowdebuginfo.php" title="setShowDebugInfo">setShowDebugInfo</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setstart.php" title="setStart">setStart</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setstats.php" title="setStats">setStats</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.setterms.php" title="setTerms">setTerms</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsfield.php" title="setTermsField">setTermsField</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsincludelowerbound.php" title="setTermsIncludeLowerBound">setTermsIncludeLowerBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsincludeupperbound.php" title="setTermsIncludeUpperBound">setTermsIncludeUpperBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermslimit.php" title="setTermsLimit">setTermsLimit</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermslowerbound.php" title="setTermsLowerBound">setTermsLowerBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsmaxcount.php" title="setTermsMaxCount">setTermsMaxCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsmincount.php" title="setTermsMinCount">setTermsMinCount</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsprefix.php" title="setTermsPrefix">setTermsPrefix</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsreturnraw.php" title="setTermsReturnRaw">setTermsReturnRaw</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermssort.php" title="setTermsSort">setTermsSort</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settermsupperbound.php" title="setTermsUpperBound">setTermsUpperBound</a>
                        </li>
                                                <li class="">
                            <a href="solrquery.settimeallowed.php" title="setTimeAllowed">setTimeAllowed</a>
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
