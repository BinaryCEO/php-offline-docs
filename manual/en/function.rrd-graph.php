<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: rrd_graph - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.rrd-graph.php">
 <link rel="shorturl" href="https://www.php.net/rrd-graph">
 <link rel="alternate" href="https://www.php.net/rrd-graph" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.rrd.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rrd-first.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rrd-info.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.rrd-graph.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.rrd-graph.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.rrd-graph.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.rrd-graph.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.rrd-graph.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.rrd-graph.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.rrd-graph.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.rrd-graph.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.rrd-graph.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.rrd-graph.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.rrd-graph.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates image from a data" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: rrd_graph - Manual" />
<meta name="twitter:description" content="Creates image from a data" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: rrd_graph - Manual" />
<meta itemprop="description" content="Creates image from a data" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates image from a data" />

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
        <a href="function.rrd-info.php">
          rrd_info &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rrd-first.php">
          &laquo; rrd_first        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.rrd.php'>RRD</a></li>      <li><a href='ref.rrd.php'>RRD Functions</a></li>      </ul>
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
            <option value='en/function.rrd-graph.php' selected="selected">English</option>
            <option value='de/function.rrd-graph.php'>German</option>
            <option value='es/function.rrd-graph.php'>Spanish</option>
            <option value='fr/function.rrd-graph.php'>French</option>
            <option value='it/function.rrd-graph.php'>Italian</option>
            <option value='ja/function.rrd-graph.php'>Japanese</option>
            <option value='pt_BR/function.rrd-graph.php'>Brazilian Portuguese</option>
            <option value='ru/function.rrd-graph.php'>Russian</option>
            <option value='tr/function.rrd-graph.php'>Turkish</option>
            <option value='uk/function.rrd-graph.php'>Ukrainian</option>
            <option value='zh/function.rrd-graph.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.rrd-graph" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">rrd_graph</h1>
  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_graph</span> &mdash; <span class="dc-title">Creates image from a data</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.rrd-graph-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>rrd_graph</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Creates image for a particular data from RRD file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.rrd-graph-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">filename</code></dt>
    <dd>
     <p class="para">
      The filename to output the graph to. This will generally end in either
      <code class="literal">.png</code>, <code class="literal">.svg</code> or
      <code class="literal">.eps</code>, depending on the format you want to output.
     </p>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      Options for generating image. See man page of rrd graph for all
      possible options. All options (data definitions, variable definitions, etc.)
      are allowed.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.rrd-graph-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Array with information about generated image is returned, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/rrd/functions/rrd-graph.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.rrd-graph%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.rrd-graph&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.rrd-graph.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124592">  <div class="votes">
    <div id="Vu124592">
    <a href="/manual/vote-note.php?id=124592&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124592">
    <a href="/manual/vote-note.php?id=124592&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124592" title="77% like this...">
    5
    </div>
  </div>
  <a href="#124592" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124592"> &para;</a><div class="date" title="2020-01-09 02:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124592">
<div class="phpcode"><code><span class="html">This documentation page is useless ... <br /><br />"See man page of rrd graph for all possible options"<br /><br />I thought I am looking at the documentation, of not, why not provide a link ?</span></code></div>
  </div>
 </div>
  <div class="note" id="112625">  <div class="votes">
    <div id="Vu112625">
    <a href="/manual/vote-note.php?id=112625&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112625">
    <a href="/manual/vote-note.php?id=112625&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112625" title="55% like this...">
    1
    </div>
  </div>
  <a href="#112625" class="name">
  <strong class="user"><em>Dk</em></strong></a><a class="genanchor" href="#112625"> &para;</a><div class="date" title="2013-07-05 05:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112625">
<div class="phpcode"><code><span class="html">You can get the latest RRD Error by simply doing print_r(rrd_error()) immediately after the rrd_graph() call.</span></code></div>
  </div>
 </div>
  <div class="note" id="108638">  <div class="votes">
    <div id="Vu108638">
    <a href="/manual/vote-note.php?id=108638&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108638">
    <a href="/manual/vote-note.php?id=108638&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108638" title="53% like this...">
    1
    </div>
  </div>
  <a href="#108638" class="name">
  <strong class="user"><em>Matt C</em></strong></a><a class="genanchor" href="#108638"> &para;</a><div class="date" title="2012-05-13 08:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108638">
<div class="phpcode"><code><span class="html">Note; apache server requires write access to the folder in which the image is to be created otherwise no image file is produced, and (unhelpfully) no error is generated.</span></code></div>
  </div>
 </div>
  <div class="note" id="116783">  <div class="votes">
    <div id="Vu116783">
    <a href="/manual/vote-note.php?id=116783&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116783">
    <a href="/manual/vote-note.php?id=116783&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116783" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#116783" class="name">
  <strong class="user"><em>info at ukee dot nl</em></strong></a><a class="genanchor" href="#116783"> &para;</a><div class="date" title="2015-02-27 09:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116783">
<div class="phpcode"><code><span class="html">When using style features like:  --font TITLE:13:Times<br />use in your code: --font=TITLE:13:Times<br /><br />the "=" is missing in the documentation</span></code></div>
  </div>
 </div>
  <div class="note" id="112866">  <div class="votes">
    <div id="Vu112866">
    <a href="/manual/vote-note.php?id=112866&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112866">
    <a href="/manual/vote-note.php?id=112866&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112866" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#112866" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112866"> &para;</a><div class="date" title="2013-07-30 11:16"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112866">
<div class="phpcode"><code><span class="html">When I add <br /><br />--font AXIS:8:<br /><br />into $options, <br /><br />I receive the next error:<br /><br />PNG creation error: unknown option '--font AXIS:8:'<br /><br />According to docs from rrdtool site the right syntax is:<br /><br />[-n|--font FONTTAG:size:[font]]<br /><br />This lets you customize which font to use for the various text elements on the RRD graphs. DEFAULT sets the default value for all elements, TITLE for the title, AXIS for the axis labels, UNIT for the vertical unit label, LEGEND for the graph legend, WATERMARK for the watermark on the edge of the graph.<br /><br />Use Times for the title: --font TITLE:13:Times<br /><br />Note that you need to quote the argument to --font if the font-name contains whitespace: --font "TITLE:13:Some Font"<br /><br />If you do not give a font string you can modify just the size of the default font: --font TITLE:13:.</span></code></div>
  </div>
 </div>
  <div class="note" id="124598">  <div class="votes">
    <div id="Vu124598">
    <a href="/manual/vote-note.php?id=124598&amp;page=function.rrd-graph&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124598">
    <a href="/manual/vote-note.php?id=124598&amp;page=function.rrd-graph&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124598" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#124598" class="name">
  <strong class="user"><em>geekcom</em></strong></a><a class="genanchor" href="#124598"> &para;</a><div class="date" title="2020-01-10 04:20"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124598">
<div class="phpcode"><code><span class="html">For a rrdgraph doc/man page see:<br /><br /><a href="https://docs.oracle.com/cd/E88353_01/html/E37839/rrdgraph-1.html" rel="nofollow" target="_blank">https://docs.oracle.com/cd/E88353_01/html/E37839/rrdgraph-1.html</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.rrd-graph&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.rrd-graph.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.rrd.php">RRD Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.rrd-create.php" title="rrd_&#8203;create">rrd_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-error.php" title="rrd_&#8203;error">rrd_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-fetch.php" title="rrd_&#8203;fetch">rrd_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-first.php" title="rrd_&#8203;first">rrd_&#8203;first</a>
                        </li>
                                                <li class="current">
                            <a href="function.rrd-graph.php" title="rrd_&#8203;graph">rrd_&#8203;graph</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-info.php" title="rrd_&#8203;info">rrd_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-last.php" title="rrd_&#8203;last">rrd_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-lastupdate.php" title="rrd_&#8203;lastupdate">rrd_&#8203;lastupdate</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-restore.php" title="rrd_&#8203;restore">rrd_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-tune.php" title="rrd_&#8203;tune">rrd_&#8203;tune</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-update.php" title="rrd_&#8203;update">rrd_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-version.php" title="rrd_&#8203;version">rrd_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.rrd-xport.php" title="rrd_&#8203;xport">rrd_&#8203;xport</a>
                        </li>
                                                <li class="">
                            <a href="function.rrdc-disconnect.php" title="rrdc_&#8203;disconnect">rrdc_&#8203;disconnect</a>
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
