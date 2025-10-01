<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNodeList::item - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domnodelist.item.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnodelist.item.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnodelist.item.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnodelist.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnodelist.getiterator.php">
 <link rel="next" href="https://www.php.net/manual/en/class.domnotation.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnodelist.item.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnodelist.item.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnodelist.item.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnodelist.item.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnodelist.item.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnodelist.item.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnodelist.item.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnodelist.item.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnodelist.item.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnodelist.item.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnodelist.item.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Retrieves a node specified by index" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNodeList::item - Manual" />
<meta name="twitter:description" content="Retrieves a node specified by index" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNodeList::item - Manual" />
<meta itemprop="description" content="Retrieves a node specified by index" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Retrieves a node specified by index" />

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
        <a href="class.domnotation.php">
          DOMNotation &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnodelist.getiterator.php">
          &laquo; DOMNodeList::getIterator        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domnodelist.php'>DOMNodeList</a></li>      </ul>
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
            <option value='en/domnodelist.item.php' selected="selected">English</option>
            <option value='de/domnodelist.item.php'>German</option>
            <option value='es/domnodelist.item.php'>Spanish</option>
            <option value='fr/domnodelist.item.php'>French</option>
            <option value='it/domnodelist.item.php'>Italian</option>
            <option value='ja/domnodelist.item.php'>Japanese</option>
            <option value='pt_BR/domnodelist.item.php'>Brazilian Portuguese</option>
            <option value='ru/domnodelist.item.php'>Russian</option>
            <option value='tr/domnodelist.item.php'>Turkish</option>
            <option value='uk/domnodelist.item.php'>Ukrainian</option>
            <option value='zh/domnodelist.item.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnodelist.item" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNodeList::item</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNodeList::item</span> &mdash; <span class="dc-title">
   Retrieves a node specified by index
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domnodelist.item-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNodeList::item</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span>|<span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   Retrieves a node specified by <code class="parameter">index</code> within the 
   <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> object.
  </p>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    If you need to know the number of nodes in the collection, use 
    the <code class="literal">length</code> property of the 
    <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> object.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-domnodelist.item-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">index</code></dt>
     <dd>
      <p class="para">
       Index of the node into the collection.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domnodelist.item-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The node at the <code class="parameter">index</code>th position in the 
   <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span>, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if that is not a valid
   index.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domnodelist.item-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5823">
    <p><strong>Example #1 Traversing all the entries of the table</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-docbook.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$items </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'entry'</span><span style="color: #007700">);<br /><br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$items</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">length</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />    echo </span><span style="color: #0000BB">$items</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #0000BB">$i</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">nodeValue </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-5824">
    <p><strong>Example #2 Accessing item with array syntax</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-docbook.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$items </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'entry'</span><span style="color: #007700">);<br /><br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$items</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">length</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />    echo </span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">nodeValue </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-5825">
    <p><strong>Example #3 Traversing items with <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-docbook.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$items </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'entry'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$items </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nodeValue </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Title
Author
Language
ISBN
The Grapes of Wrath
John Steinbeck
en
0140186409
The Pearl
John Steinbeck
en
014017737X
Samarcande
Amine Maalouf
fr
2253051209</pre>
</div>
    </div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnodelist/item.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnodelist.item%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnodelist.item&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnodelist.item.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="80249">  <div class="votes">
    <div id="Vu80249">
    <a href="/manual/vote-note.php?id=80249&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80249">
    <a href="/manual/vote-note.php?id=80249&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80249" title="100% like this...">
    3
    </div>
  </div>
  <a href="#80249" class="name">
  <strong class="user"><em>vinyanov at poczta dot onet dot pl</em></strong></a><a class="genanchor" href="#80249"> &para;</a><div class="date" title="2008-01-05 10:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80249">
<div class="phpcode"><code><span class="html">SimpleXML has its own SPL iterator. See <a href="http://www.php.net/~helly/php/ext/spl/classSimpleXMLIterator.html" rel="nofollow" target="_blank">http://www.php.net/~helly/php/ext/spl/classSimpleXMLIterator.html</a> . But I guess that there are none for DOM nodes. By the way, two out of three implementations I found over the Net were not recursive, so I wrote my own. Here is the snippet:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">DOMNodeListIterator </span><span class="keyword">implements </span><span class="default">RecursiveIterator<br /></span><span class="keyword">{<br />    private<br />        </span><span class="default">$nodes</span><span class="keyword">,<br />        </span><span class="default">$offset</span><span class="keyword">;<br /><br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">DOMNodeList $nodes</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">nodes </span><span class="keyword">= </span><span class="default">$nodes</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">rewind</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">current</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">nodes </span><span class="keyword">-&gt; </span><span class="default">item</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">offset</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">key</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">current</span><span class="keyword">() -&gt; </span><span class="default">nodeName</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">next</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">offset</span><span class="keyword">++;<br />    }<br />    <br />    function </span><span class="default">valid</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">offset </span><span class="keyword">&lt; </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">nodes </span><span class="keyword">-&gt; </span><span class="default">length</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">hasChildren</span><span class="keyword">()<br />    {<br />        return isset(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">current</span><span class="keyword">() -&gt; </span><span class="default">childNodes </span><span class="keyword">-&gt; </span><span class="default">length</span><span class="keyword">) &amp;&amp; </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">current</span><span class="keyword">() -&gt; </span><span class="default">childNodes </span><span class="keyword">-&gt; </span><span class="default">length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">getChildren</span><span class="keyword">()<br />    {<br />        return new </span><span class="default">self</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">current</span><span class="keyword">() -&gt; </span><span class="default">childNodes</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Remember to use RecursiveIteratorIterator::SELF_FIRST flag when you create your iterator iterator.<br /><br /><span class="default">&lt;?php<br /><br />$iterator </span><span class="keyword">= new </span><span class="default">DOMNodeListIterator</span><span class="keyword">(</span><span class="default">$document </span><span class="keyword">-&gt; </span><span class="default">childNodes</span><span class="keyword">);<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">, </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">SELF_FIRST</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Should work, has just few minutes though. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="75390">  <div class="votes">
    <div id="Vu75390">
    <a href="/manual/vote-note.php?id=75390&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75390">
    <a href="/manual/vote-note.php?id=75390&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75390" title="100% like this...">
    3
    </div>
  </div>
  <a href="#75390" class="name">
  <strong class="user"><em>Geoffrey Thubron</em></strong></a><a class="genanchor" href="#75390"> &para;</a><div class="date" title="2007-05-26 02:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75390">
<div class="phpcode"><code><span class="html">@ tfg_allardyce at gmail dot com<br /><br />You could loop through the list backwards, that way, you are only ever taking off the last item from the list, and hence wont have disrupted the order.</span></code></div>
  </div>
 </div>
  <div class="note" id="101718">  <div class="votes">
    <div id="Vu101718">
    <a href="/manual/vote-note.php?id=101718&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101718">
    <a href="/manual/vote-note.php?id=101718&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101718" title="77% like this...">
    5
    </div>
  </div>
  <a href="#101718" class="name">
  <strong class="user"><em>Nagy Attila</em></strong></a><a class="genanchor" href="#101718"> &para;</a><div class="date" title="2011-01-06 09:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101718">
<div class="phpcode"><code><span class="html">DOMNodeList::item does not return in constant time!<br /><br />If you need to iterate over large nodelist then you'd better use standard navigation.<br /><br />Instead of:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$nodelist </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {<br />    </span><span class="comment">// do something<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />you could do:<br /><br /><span class="default">&lt;?php<br />$node </span><span class="keyword">= </span><span class="default">$parentnode</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">;<br /><br />do {<br />    </span><span class="comment">// do something<br /></span><span class="keyword">} while (</span><span class="default">$node </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nextSibling</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109172">  <div class="votes">
    <div id="Vu109172">
    <a href="/manual/vote-note.php?id=109172&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109172">
    <a href="/manual/vote-note.php?id=109172&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109172" title="83% like this...">
    4
    </div>
  </div>
  <a href="#109172" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#109172"> &para;</a><div class="date" title="2012-06-25 11:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109172">
<div class="phpcode"><code><span class="html">calling domnodelist-&gt;item($i) with an index $i greater than domnodelist-&gt;length - 1 , will return the entire document, will not produce an error, and will not circle back to the start of the list.</span></code></div>
  </div>
 </div>
  <div class="note" id="119471">  <div class="votes">
    <div id="Vu119471">
    <a href="/manual/vote-note.php?id=119471&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119471">
    <a href="/manual/vote-note.php?id=119471&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119471" title="60% like this...">
    1
    </div>
  </div>
  <a href="#119471" class="name">
  <strong class="user"><em>jeffpuckett2 at gmail dot com</em></strong></a><a class="genanchor" href="#119471"> &para;</a><div class="date" title="2016-06-15 02:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119471">
<div class="phpcode"><code><span class="html">DOMNodelist::item can return a DOMElement object, which extends DOMNode class. But it can also return a DOMText object.<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= </span><span class="string">'<br />&lt;root&gt;<br />  &lt;node/&gt;<br />  &lt;node&gt;<br />    &lt;sub&gt;more&lt;/sub&gt;<br />  &lt;/node&gt;<br />  &lt;node&gt;<br />    &lt;sub&gt;another&lt;/sub&gt;<br />  &lt;/node&gt;<br />  &lt;node&gt;value&lt;/node&gt;<br />&lt;/root&gt;<br />'</span><span class="keyword">;<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="default">$items </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$items</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$items</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)).</span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Results in this output:<br /><br />DOMText<br />DOMElement<br />DOMText<br />DOMElement<br />DOMText<br />DOMElement<br />DOMText<br />DOMElement<br />DOMText</span></code></div>
  </div>
 </div>
  <div class="note" id="78826">  <div class="votes">
    <div id="Vu78826">
    <a href="/manual/vote-note.php?id=78826&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78826">
    <a href="/manual/vote-note.php?id=78826&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78826" title="60% like this...">
    1
    </div>
  </div>
  <a href="#78826" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#78826"> &para;</a><div class="date" title="2007-10-29 02:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78826">
<div class="phpcode"><code><span class="html">Keep in mind that DOMNodelists are "live" - changes to the document or node that the DOMNodelist was derived from will be reflected in the DOMNodelist. In other words, a list of a parent node's children will change if you change the parent's children!</span></code></div>
  </div>
 </div>
  <div class="note" id="85226">  <div class="votes">
    <div id="Vu85226">
    <a href="/manual/vote-note.php?id=85226&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85226">
    <a href="/manual/vote-note.php?id=85226&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85226" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85226" class="name">
  <strong class="user"><em>olivier dot berger at it-sudparis dot eu</em></strong></a><a class="genanchor" href="#85226"> &para;</a><div class="date" title="2008-08-21 02:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85226">
<div class="phpcode"><code><span class="html">It seems that with zend.ze1_compatibility_mode on, the only way to iterate over the items list is with :<br />for ($i = 0; $i &lt; $nodeList-&gt;length; ++$i) {<br />    $nodeName = $nodeList-&gt;item($i)-&gt;nodeName;<br />    $nodeValue = $nodeList-&gt;item($i)-&gt;nodeValue;<br />}<br /><br />As other attemps failed :<br /><br />for ($i = 0; $i &lt; $nodeList-&gt;length; ++$i) {<br />    $node = &amp;$nodeList-&gt;item($i);<br />    $nodeName = $node-&gt;nodeName;<br />    $nodeValue = $node-&gt;nodeValue;<br />}<br /><br />or :<br />foreach ($nodeList as $node) {<br />    echo $node-&gt;nodeName;<br />    echo $node-&gt;nodeValue;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="76718">  <div class="votes">
    <div id="Vu76718">
    <a href="/manual/vote-note.php?id=76718&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76718">
    <a href="/manual/vote-note.php?id=76718&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76718" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76718" class="name">
  <strong class="user"><em>james dot dunmore at gmai dot com</em></strong></a><a class="genanchor" href="#76718"> &para;</a><div class="date" title="2007-07-27 08:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76718">
<div class="phpcode"><code><span class="html">tfg_allardyce at gmail dot com<br /><br />I have had exactly this problem.<br /><br />To rectify I've had to do this:<br /><span class="default">&lt;?php<br />$old_element </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'Element1'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$new_element </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'NewElement1'</span><span class="keyword">);<br /><br /></span><span class="default">$old_element_childNodes </span><span class="keyword">= </span><span class="default">$old_element</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">$old_element_childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br /><br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{        <br />    </span><span class="default">$oldChildren_array</span><span class="keyword">[] = </span><span class="default">$old_element_childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />}<br /><br />foreach(</span><span class="default">$oldChildren_array </span><span class="keyword">as </span><span class="default">$old_c</span><span class="keyword">)<br />{<br />    </span><span class="default">$new_element</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$old_c</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Rather than this:<br />(which I will bug report)<br /><span class="default">&lt;?php<br />$old_element </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'Element1'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">):<br /></span><span class="default">$new_element </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'NewElement1'</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$old_element</span><span class="keyword">-&gt;</span><span class="default">childNode </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">)<br />{<br />     </span><span class="default">$new_element</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Using the latter, randomally removes the children!</span></code></div>
  </div>
 </div>
  <div class="note" id="73211">  <div class="votes">
    <div id="Vu73211">
    <a href="/manual/vote-note.php?id=73211&amp;page=domnodelist.item&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73211">
    <a href="/manual/vote-note.php?id=73211&amp;page=domnodelist.item&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73211" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#73211" class="name">
  <strong class="user"><em>oliver dot christen at camptocamp dot com</em></strong></a><a class="genanchor" href="#73211"> &para;</a><div class="date" title="2007-02-13 07:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73211">
<div class="phpcode"><code><span class="html">NodeList are something annoying because you can't output the content with a simple print_r, so I did a little function that add all the node to a new empty DOMDocument and output it as a string.<br />Have fun.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">domNodeList_to_string</span><span class="keyword">(</span><span class="default">$DomNodeList</span><span class="keyword">) {<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br />    while ( </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$DomNodeList</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ) {<br />        </span><span class="comment">// import node<br />        </span><span class="default">$domNode </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="comment">// append node<br />        </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$domNode</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="comment">// I added this because xml output and ajax do not like each others<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">);<br />    return </span><span class="default">$output</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnodelist.item&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnodelist.item.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domnodelist.php">DOMNodeList</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domnodelist.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="domnodelist.getiterator.php" title="getIterator">getIterator</a>
                        </li>
                                                <li class="current">
                            <a href="domnodelist.item.php" title="item">item</a>
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
