<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode::C14N - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domnode.c14n.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnode.c14n.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnode.c14n.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.appendchild.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.c14nfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnode.c14n.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnode.c14n.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnode.c14n.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnode.c14n.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnode.c14n.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnode.c14n.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnode.c14n.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnode.c14n.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnode.c14n.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnode.c14n.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnode.c14n.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Canonicalize nodes to a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode::C14N - Manual" />
<meta name="twitter:description" content="Canonicalize nodes to a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode::C14N - Manual" />
<meta itemprop="description" content="Canonicalize nodes to a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Canonicalize nodes to a string" />

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
        <a href="domnode.c14nfile.php">
          DOMNode::C14NFile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.appendchild.php">
          &laquo; DOMNode::appendChild        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domnode.php'>DOMNode</a></li>      </ul>
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
            <option value='en/domnode.c14n.php' selected="selected">English</option>
            <option value='de/domnode.c14n.php'>German</option>
            <option value='es/domnode.c14n.php'>Spanish</option>
            <option value='fr/domnode.c14n.php'>French</option>
            <option value='it/domnode.c14n.php'>Italian</option>
            <option value='ja/domnode.c14n.php'>Japanese</option>
            <option value='pt_BR/domnode.c14n.php'>Brazilian Portuguese</option>
            <option value='ru/domnode.c14n.php'>Russian</option>
            <option value='tr/domnode.c14n.php'>Turkish</option>
            <option value='uk/domnode.c14n.php'>Ukrainian</option>
            <option value='zh/domnode.c14n.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnode.c14n" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNode::C14N</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNode::C14N</span> &mdash; <span class="dc-title">Canonicalize nodes to a string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-domnode.c14n-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNode::C14N</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclusive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$withComments</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$xpath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$nsPrefixes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Canonicalize nodes to a string
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-domnode.c14n-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">exclusive</code></dt>
    <dd>
     <p class="para">
      Enable exclusive parsing of only the nodes matched by the provided
      xpath or namespace prefixes.
     </p>
    </dd>
   
   
    <dt><code class="parameter">withComments</code></dt>
    <dd>
     <p class="para">
      Retain comments in output.
     </p>
    </dd>
   
   
    <dt><code class="parameter">xpath</code></dt>
    <dd>
  <p class="para">
   An array of XPaths to filter the nodes by.
   Each entry in this array is an associative array with:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      A required <code class="literal">query</code> key containing the XPath expression as a string.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      An optional <code class="literal">namespaces</code> key containing an array that maps namespace prefixes (keys) to namespace URIs (values).
     </span>
    </li>
   </ul>
  </p>
 </dd>
   
   
    <dt><code class="parameter">nsPrefixes</code></dt>
    <dd>
     <p class="para">
      An array of namespace prefixes to filter the nodes by.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-domnode.c14n-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns canonicalized nodes as a string or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-domnode.c14n-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5815">
    <p><strong>Example #1 Example with XPath query</strong></p>
    <div class="example-contents"><p>
     This example demonstrates advanced usage canonicalizing and filtering the nodes by an XPath query.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(&lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;root xmlns:food="urn:food"&gt;<br />    &lt;!-- redundant namespace declaration will be canonicalized --&gt;<br />    &lt;food:fruit xmlns:food="urn:food"&gt;Apple&lt;/food:fruit&gt;<br />    &lt;food:fruit&gt;Orange&lt;/food:fruit&gt;<br />    &lt;food:fruit&gt;Pear&lt;/food:fruit&gt;<br />    &lt;!-- vegetables here --&gt;<br />    &lt;food:vegetable&gt;Lettuce&lt;/food:vegetable&gt;<br />&lt;/root&gt;<br /></span><span style="color: #007700">XML);<br /><br />echo </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">C14N</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, [<br />    </span><span style="color: #DD0000">"query" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">".//f:fruit|.//f:fruit/text()"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"namespaces" </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">"f" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"urn:food"</span><span style="color: #007700">],<br />]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;food:fruit&gt;Apple&lt;/food:fruit&gt;&lt;food:fruit&gt;Orange&lt;/food:fruit&gt;&lt;food:fruit&gt;Pear&lt;/food:fruit&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-domnode.c14n-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domnode.c14nfile.php" class="methodname" rel="rdfs-seeAlso">DOMNode::C14NFile()</a> - Canonicalize nodes to a file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode/c14n.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnode.c14n%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnode.c14n&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.c14n.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111773">  <div class="votes">
    <div id="Vu111773">
    <a href="/manual/vote-note.php?id=111773&amp;page=domnode.c14n&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111773">
    <a href="/manual/vote-note.php?id=111773&amp;page=domnode.c14n&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111773" title="78% like this...">
    21
    </div>
  </div>
  <a href="#111773" class="name">
  <strong class="user"><em>Rijk</em></strong></a><a class="genanchor" href="#111773"> &para;</a><div class="date" title="2013-03-27 09:26"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111773">
<div class="phpcode"><code><span class="html">When working with (malformed) HTML, you're probably better off using DOMDocument's saveHTML() method instead. C14N() will attempt to make your HTML valid XML, for example by converting &lt;br&gt; to &lt;br&gt;&lt;/br&gt;.<br /><br />So instead of:<br />$html = $Node-&gt;C14N();<br /><br />Use:<br />$html = $Node-&gt;ownerDocument-&gt;saveHTML( $Node );</span></code></div>
  </div>
 </div>
  <div class="note" id="116871">  <div class="votes">
    <div id="Vu116871">
    <a href="/manual/vote-note.php?id=116871&amp;page=domnode.c14n&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116871">
    <a href="/manual/vote-note.php?id=116871&amp;page=domnode.c14n&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116871" title="83% like this...">
    16
    </div>
  </div>
  <a href="#116871" class="name">
  <strong class="user"><em>jorda at edpsciences dot org</em></strong></a><a class="genanchor" href="#116871"> &para;</a><div class="date" title="2015-03-13 09:11"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116871">
<div class="phpcode"><code><span class="html">C14N() returns an empty string if the node is not included in the document tree:<br /><span class="default">&lt;?php<br />$d </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br /></span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'&lt;foo&gt;&lt;/foo&gt;'</span><span class="keyword">);<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">-&gt;</span><span class="default">C14N</span><span class="keyword">());<br /></span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">-&gt;</span><span class="default">C14N</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span>output:<br />string(0) ""<br />string(11) "&lt;bar&gt;&lt;/bar&gt;"</span></code></div>
  </div>
 </div>
  <div class="note" id="118732">  <div class="votes">
    <div id="Vu118732">
    <a href="/manual/vote-note.php?id=118732&amp;page=domnode.c14n&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118732">
    <a href="/manual/vote-note.php?id=118732&amp;page=domnode.c14n&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118732" title="80% like this...">
    3
    </div>
  </div>
  <a href="#118732" class="name">
  <strong class="user"><em>lordbaco</em></strong></a><a class="genanchor" href="#118732"> &para;</a><div class="date" title="2016-01-28 09:57"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118732">
<div class="phpcode"><code><span class="html">[edit by nielsdos: This has been fixed starting in PHP 8.4]
<br />
<br />Good to know:
<br />
<br />&lt;&lt; Due to a known issue in XML canonicalization in PHP, processing large metadata files in SimpleSAMLphp takes a big amount of resources, with that amount growing approximately by the square of the number of entities in the metadata set &gt;&gt;
<br /><a href="https://simplesamlphp.org/metaprocessing" rel="nofollow" target="_blank">https://simplesamlphp.org/metaprocessing</a>
<br />
<br />&lt;&lt; The C14N() function appears to have a runtime that is O(N^2) (or possibly worse?) depending on input size, which means that it becomes very slow as the input grows. For example, an input with around 196000 nodes takes about 290 seconds, while an input with 486000 nodes takes 2200 seconds. &gt;&gt;
<br /><a href="https://bugs.php.net/bug.php?id=53655" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=53655</a>
<br />
<br />We had the same issue with a 4.1 MB XML (105k lines). The sample code of ticket  #53655 takes 1h36 minute to canonicalize it!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnode.c14n&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.c14n.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domnode.php">DOMNode</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domnode.appendchild.php" title="appendChild">appendChild</a>
                        </li>
                                                <li class="current">
                            <a href="domnode.c14n.php" title="C14N">C14N</a>
                        </li>
                                                <li class="">
                            <a href="domnode.c14nfile.php" title="C14NFile">C14NFile</a>
                        </li>
                                                <li class="">
                            <a href="domnode.clonenode.php" title="cloneNode">cloneNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.comparedocumentposition.php" title="compareDocumentPosition">compareDocumentPosition</a>
                        </li>
                                                <li class="">
                            <a href="domnode.contains.php" title="contains">contains</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getlineno.php" title="getLineNo">getLineNo</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getnodepath.php" title="getNodePath">getNodePath</a>
                        </li>
                                                <li class="">
                            <a href="domnode.getrootnode.php" title="getRootNode">getRootNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.hasattributes.php" title="hasAttributes">hasAttributes</a>
                        </li>
                                                <li class="">
                            <a href="domnode.haschildnodes.php" title="hasChildNodes">hasChildNodes</a>
                        </li>
                                                <li class="">
                            <a href="domnode.insertbefore.php" title="insertBefore">insertBefore</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isdefaultnamespace.php" title="isDefaultNamespace">isDefaultNamespace</a>
                        </li>
                                                <li class="">
                            <a href="domnode.isequalnode.php" title="isEqualNode">isEqualNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issamenode.php" title="isSameNode">isSameNode</a>
                        </li>
                                                <li class="">
                            <a href="domnode.issupported.php" title="isSupported">isSupported</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupnamespaceuri.php" title="lookupNamespaceURI">lookupNamespaceURI</a>
                        </li>
                                                <li class="">
                            <a href="domnode.lookupprefix.php" title="lookupPrefix">lookupPrefix</a>
                        </li>
                                                <li class="">
                            <a href="domnode.normalize.php" title="normalize">normalize</a>
                        </li>
                                                <li class="">
                            <a href="domnode.removechild.php" title="removeChild">removeChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.replacechild.php" title="replaceChild">replaceChild</a>
                        </li>
                                                <li class="">
                            <a href="domnode.sleep.php" title="_&#8203;_&#8203;sleep">_&#8203;_&#8203;sleep</a>
                        </li>
                                                <li class="">
                            <a href="domnode.wakeup.php" title="_&#8203;_&#8203;wakeup">_&#8203;_&#8203;wakeup</a>
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
