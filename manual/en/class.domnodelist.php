<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNodeList - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domnodelist.php">
 <link rel="shorturl" href="https://www.php.net/domnodelist">
 <link rel="alternate" href="https://www.php.net/domnodelist" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.wakeup.php">
 <link rel="next" href="https://www.php.net/manual/en/domnodelist.count.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domnodelist.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domnodelist.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domnodelist.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domnodelist.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domnodelist.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domnodelist.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domnodelist.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domnodelist.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domnodelist.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domnodelist.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domnodelist.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DOMNodeList class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNodeList - Manual" />
<meta name="twitter:description" content="The DOMNodeList class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNodeList - Manual" />
<meta itemprop="description" content="The DOMNodeList class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DOMNodeList class" />

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
        <a href="domnodelist.count.php">
          DOMNodeList::count &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.wakeup.php">
          &laquo; DOMNode::__wakeup        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      </ul>
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
            <option value='en/class.domnodelist.php' selected="selected">English</option>
            <option value='de/class.domnodelist.php'>German</option>
            <option value='es/class.domnodelist.php'>Spanish</option>
            <option value='fr/class.domnodelist.php'>French</option>
            <option value='it/class.domnodelist.php'>Italian</option>
            <option value='ja/class.domnodelist.php'>Japanese</option>
            <option value='pt_BR/class.domnodelist.php'>Brazilian Portuguese</option>
            <option value='ru/class.domnodelist.php'>Russian</option>
            <option value='tr/class.domnodelist.php'>Turkish</option>
            <option value='uk/class.domnodelist.php'>Ukrainian</option>
            <option value='zh/class.domnodelist.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domnodelist" class="reference">
 <h1 class="title">The DOMNodeList class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 
  <div class="section" id="domnodelist.intro">
   <h2 class="title">Introduction</h2>
   <p class="simpara">
    Represents a live list of nodes.
   </p>
  </div>
 
  <div class="section" id="domnodelist.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DOMNodeList</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.domnodelist.php#domnodelist.props.length">$<var class="varname">length</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="domnodelist.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnodelist.getiterator.php" class="methodname">getIterator</a></span>(): <span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnodelist.item.php" class="methodname">item</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span>|<span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

   }</div>

 
  </div>
 

  <div class="section" id="domnodelist.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="domnodelist.props.length"><var class="varname">length</var></dt>
     <dd>
      <p class="para">
       The number of nodes in the list. The range of valid child node 
       indices is 0 to <code class="literal">length - 1</code> inclusive.
      </p>
     </dd>
    
   </dl>
  </div>

  <div class="section" id="domnodelist.changelog">
   <h2 class="title">Changelog</h2>
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
        <td>8.0.0</td>
        <td>
         <span class="classname"><strong class="classname">DOMNodeList</strong></span> implements
         <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> now.
         Previously, <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> was implemented instead.
        </td>
       </tr>

       <tr>
        <td>7.2.0</td>
        <td>
         The <span class="classname"><a href="class.countable.php" class="classname">Countable</a></span> interface is implemented and 
         returns the value of the <a href="class.domnodelist.php#domnodelist.props.length" class="link">length</a> property.
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

  <div class="section">
   <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
      Nodes in the list can be accessed by array syntax.
    </span>
   </p></blockquote>
  </div>

 
  <div class="section">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li><a href="http://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-536297177" class="link external">&raquo;&nbsp;W3C specification of NodeList</a></li>
    </ul>
   </p>
  </div>
  

 </div>
 
 













 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="domnodelist.count.php">DOMNodeList::count</a> — Get number of nodes in the list</li><li><a href="domnodelist.getiterator.php">DOMNodeList::getIterator</a> — Retrieve an external iterator</li><li><a href="domnodelist.item.php">DOMNodeList::item</a> — Retrieves a node specified by index</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnodelist.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domnodelist%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domnodelist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnodelist.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109301">  <div class="votes">
    <div id="Vu109301">
    <a href="/manual/vote-note.php?id=109301&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109301">
    <a href="/manual/vote-note.php?id=109301&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109301" title="68% like this...">
    30
    </div>
  </div>
  <a href="#109301" class="name">
  <strong class="user"><em>ignitedfirestarter at gmail dot com</em></strong></a><a class="genanchor" href="#109301"> &para;</a><div class="date" title="2012-07-04 10:39"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109301">
<div class="phpcode"><code><span class="html">If you want to recurse over a DOM then this might help: <br /><span class="default">&lt;?php <br /><br /></span><span class="comment">/**<br /> * PHP's DOM classes are recursive but don't provide an implementation of <br /> * RecursiveIterator. This class provides a RecursiveIterator for looping over DOMNodeList<br /> */<br /></span><span class="keyword">class </span><span class="default">DOMNodeRecursiveIterator </span><span class="keyword">extends </span><span class="default">ArrayIterator </span><span class="keyword">implements </span><span class="default">RecursiveIterator </span><span class="keyword">{<br />  <br />  public function </span><span class="default">__construct </span><span class="keyword">(</span><span class="default">DOMNodeList $node_list</span><span class="keyword">) {<br />    <br />    </span><span class="default">$nodes </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$node_list </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {<br />      </span><span class="default">$nodes</span><span class="keyword">[] = </span><span class="default">$node</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$nodes</span><span class="keyword">);<br />    <br />  }<br />  <br />  public function </span><span class="default">getRecursiveIterator</span><span class="keyword">(){<br />    return new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">SELF_FIRST</span><span class="keyword">);<br />  }<br />  <br />  public function </span><span class="default">hasChildren </span><span class="keyword">() {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">();<br />  }<br /><br />  <br />  public function </span><span class="default">getChildren </span><span class="keyword">() {<br />    return new </span><span class="default">self</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">childNodes</span><span class="keyword">);<br />  }<br />  <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82668">  <div class="votes">
    <div id="Vu82668">
    <a href="/manual/vote-note.php?id=82668&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82668">
    <a href="/manual/vote-note.php?id=82668&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82668" title="74% like this...">
    13
    </div>
  </div>
  <a href="#82668" class="name">
  <strong class="user"><em>brack at wjp dot de</em></strong></a><a class="genanchor" href="#82668"> &para;</a><div class="date" title="2008-04-21 02:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82668">
<div class="phpcode"><code><span class="html">In PHP 5.2.5 (Windows) it is not possible to iterate correctly over the DOMNodeList object returned by DOMNode-&gt;childNodes using foreach. Instead I had to use the for loop in conjunction with the item() method of DOMNodeList for iterating over all child nodes correctly.<br /><br />I don't know whether this is really a bug, but apparently it is.</span></code></div>
  </div>
 </div>
  <div class="note" id="125981">  <div class="votes">
    <div id="Vu125981">
    <a href="/manual/vote-note.php?id=125981&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125981">
    <a href="/manual/vote-note.php?id=125981&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125981" title="77% like this...">
    5
    </div>
  </div>
  <a href="#125981" class="name">
  <strong class="user"><em>niko at yopmail dot com</em></strong></a><a class="genanchor" href="#125981"> &para;</a><div class="date" title="2021-04-03 03:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125981">
<div class="phpcode"><code><span class="html">It's worth to mention that DOMNodeList is not an Array,  so you have to convert first to an array before to use for, foreach or array_map, array_filter, array_walk functions.<br /><br />Use iterator_to_array to make the conversion ( since PHP 5.1.0 ) .<br /><br />&lt;code&gt;<br />  /* @ suppress warning var_dump not yet implemented for class */<br /><br />@array_walk( iterator_to_array( $Some_NodeList ), 'var_dump' ) );<br /><br />foreach( iterator_to_array( $Some_NodeList ) as $node )<br />    @var_dump( $node );<br /><br />&lt;/code&gt;<br /><br />Hope is usefull.</span></code></div>
  </div>
 </div>
  <div class="note" id="97986">  <div class="votes">
    <div id="Vu97986">
    <a href="/manual/vote-note.php?id=97986&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97986">
    <a href="/manual/vote-note.php?id=97986&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97986" title="68% like this...">
    13
    </div>
  </div>
  <a href="#97986" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#97986"> &para;</a><div class="date" title="2010-05-19 08:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97986">
<div class="phpcode"><code><span class="html">Note that $length is calculated (php5.3.2).<br />Iterating over a large NodeList may be time expensive.<br /><br />Prefer :<br />$nb = $nodelist-&gt;length;<br />for($pos=0; $pos&lt;$nb; $pos++)<br /><br />Than:<br />for($pos=0; $pos&lt;$nodelist-&gt;length; $pos++)<br /><br />I had a hard time figuring that out...</span></code></div>
  </div>
 </div>
  <div class="note" id="83390">  <div class="votes">
    <div id="Vu83390">
    <a href="/manual/vote-note.php?id=83390&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83390">
    <a href="/manual/vote-note.php?id=83390&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83390" title="63% like this...">
    15
    </div>
  </div>
  <a href="#83390" class="name">
  <strong class="user"><em>c dot 1 at smithies dot org</em></strong></a><a class="genanchor" href="#83390"> &para;</a><div class="date" title="2008-05-23 05:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83390">
<div class="phpcode"><code><span class="html">You can modify, and even delete, nodes from a DOMNodeList if you iterate backwards:<br /><br />$els = $document-&gt;getElementsByTagName('input');<br />for ($i = $els-&gt;length; --$i &gt;= 0; ) {<br />  $el = $els-&gt;item($i);<br />  switch ($el-&gt;getAttribute('name')) {<br />    case 'MAX_FILE_SIZE' :<br />      $el-&gt;parentNode-&gt;removeChild($el);<br />    break;<br />    case 'inputfile' :<br />      $el-&gt;setAttribute('type', 'text');<br />    //break;<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="83178">  <div class="votes">
    <div id="Vu83178">
    <a href="/manual/vote-note.php?id=83178&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83178">
    <a href="/manual/vote-note.php?id=83178&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83178" title="66% like this...">
    11
    </div>
  </div>
  <a href="#83178" class="name">
  <strong class="user"><em>drichter at muvicom dot de</em></strong></a><a class="genanchor" href="#83178"> &para;</a><div class="date" title="2008-05-14 04:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83178">
<div class="phpcode"><code><span class="html">I have done some testing and have found 2 results:<br />(My System: Win XP with PHP 5.2.1)<br /><br />1) Iteration with foreach does function correctly as "james dot j dot hackett at gmail dot com" writes, _if_ you only do readonly stuff with foreach or minor writings of some attributes.<br /><br />2) foreach does not function, if you are doing some DOM-Operations while iterating. In my situation it was adding the iterated $node as an child to an new node:<br /><br />$newNode = $dom-&gt;createElement('newNode') ;<br />foreach ($nodeList as $node) {<br />  echo $node-&gt;nodeValue ;<br />  $newNode-&gt;appendChild($node) ;<br />}<br /><br />This only gives you the first element ...<br /><br />I'm interpreting it as an confusing but correct behavior because of the changes within the $dom-object while appending the node at an additional place ... <br /><br />So, if you want to do something like 2) use for, length and item() :)</span></code></div>
  </div>
 </div>
  <div class="note" id="83068">  <div class="votes">
    <div id="Vu83068">
    <a href="/manual/vote-note.php?id=83068&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83068">
    <a href="/manual/vote-note.php?id=83068&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83068" title="65% like this...">
    6
    </div>
  </div>
  <a href="#83068" class="name">
  <strong class="user"><em>james dot j dot hackett at gmail dot com</em></strong></a><a class="genanchor" href="#83068"> &para;</a><div class="date" title="2008-05-08 09:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83068">
<div class="phpcode"><code><span class="html">In Response to 'kassah at gmail'<br /><br />You don't need to convert a DOMNodeList to an array in order iterate through it using 'foreach'.  You can use foreach directly with the DOMNodeList.<br /><br />$nodeList = $someDomDocument-&gt;getElementsbytagname('user');<br /><br />foreach ($nodeList as $node) {<br />    echo $node-&gt;nodeValue;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85335">  <div class="votes">
    <div id="Vu85335">
    <a href="/manual/vote-note.php?id=85335&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85335">
    <a href="/manual/vote-note.php?id=85335&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85335" title="54% like this...">
    1
    </div>
  </div>
  <a href="#85335" class="name">
  <strong class="user"><em>bobvandell at hotmail dot com</em></strong></a><a class="genanchor" href="#85335"> &para;</a><div class="date" title="2008-08-26 09:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85335">
<div class="phpcode"><code><span class="html">That's actually incorrect. You can use function results as objects. It makes building an API for your database very clean and neat. For example:<br /><br />Our code:<br /><br />$articles = Node::screate('tags', 123456)-&gt;assets('like:title:test')-&gt;articles;<br /><br />We use the above code to get articles that are linked to assets that are linked to a specific tag in our database.</span></code></div>
  </div>
 </div>
  <div class="note" id="83180">  <div class="votes">
    <div id="Vu83180">
    <a href="/manual/vote-note.php?id=83180&amp;page=class.domnodelist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83180">
    <a href="/manual/vote-note.php?id=83180&amp;page=class.domnodelist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83180" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#83180" class="name">
  <strong class="user"><em>drichter at muvicom dot de</em></strong></a><a class="genanchor" href="#83180"> &para;</a><div class="date" title="2008-05-14 06:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83180">
<div class="phpcode"><code><span class="html">Addition to my first note:<br /><br />An traditional for-loop does not allow you to change the DOM-tree while looping - the effects are the nearly the same as with foreach. So you have to collect the nodes in an array and do the tree-altering stuff within a second loop (looping the array this time ...)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domnodelist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnodelist.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.dom.php">DOM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.dom.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="dom.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="dom.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="dom.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.domattr.php" title="DOMAttr">DOMAttr</a>
                        </li>
                                                <li class="">
                            <a href="class.domcdatasection.php" title="DOMCdataSection">DOMCdataSection</a>
                        </li>
                                                <li class="">
                            <a href="class.domcharacterdata.php" title="DOMCharacterData">DOMCharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.domchildnode.php" title="DOMChildNode">DOMChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domcomment.php" title="DOMComment">DOMComment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocument.php" title="DOMDocument">DOMDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumentfragment.php" title="DOMDocumentFragment">DOMDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumenttype.php" title="DOMDocumentType">DOMDocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.domelement.php" title="DOMElement">DOMElement</a>
                        </li>
                                                <li class="">
                            <a href="class.domentity.php" title="DOMEntity">DOMEntity</a>
                        </li>
                                                <li class="">
                            <a href="class.domentityreference.php" title="DOMEntityReference">DOMEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.domexception.php" title="DOMException">DOMException</a>
                        </li>
                                                <li class="">
                            <a href="class.domimplementation.php" title="DOMImplementation">DOMImplementation</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamednodemap.php" title="DOMNamedNodeMap">DOMNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamespacenode.php" title="DOMNameSpaceNode">DOMNameSpaceNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domnode.php" title="DOMNode">DOMNode</a>
                        </li>
                                                <li class="current">
                            <a href="class.domnodelist.php" title="DOMNodeList">DOMNodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.domnotation.php" title="DOMNotation">DOMNotation</a>
                        </li>
                                                <li class="">
                            <a href="class.domparentnode.php" title="DOMParentNode">DOMParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domprocessinginstruction.php" title="DOMProcessingInstruction">DOMProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.domtext.php" title="DOMText">DOMText</a>
                        </li>
                                                <li class="">
                            <a href="class.domxpath.php" title="DOMXPath">DOMXPath</a>
                        </li>
                                                <li class="">
                            <a href="enum.dom-adjacentposition.php" title="Dom\AdjacentPosition">Dom\AdjacentPosition</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-attr.php" title="Dom\Attr">Dom\Attr</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-cdatasection.php" title="Dom\CDATASection">Dom\CDATASection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-characterdata.php" title="Dom\CharacterData">Dom\CharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-childnode.php" title="Dom\ChildNode">Dom\ChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-comment.php" title="Dom\Comment">Dom\Comment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-document.php" title="Dom\Document">Dom\Document</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documentfragment.php" title="Dom\DocumentFragment">Dom\DocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documenttype.php" title="Dom\DocumentType">Dom\DocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-dtdnamednodemap.php" title="Dom\DtdNamedNodeMap">Dom\DtdNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-element.php" title="Dom\Element">Dom\Element</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entity.php" title="Dom\Entity">Dom\Entity</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entityreference.php" title="Dom\EntityReference">Dom\EntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlcollection.php" title="Dom\HTMLCollection">Dom\HTMLCollection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmldocument.php" title="Dom\HTMLDocument">Dom\HTMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlelement.php" title="Dom\HTMLElement">Dom\HTMLElement</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-implementation.php" title="Dom\Implementation">Dom\Implementation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namednodemap.php" title="Dom\NamedNodeMap">Dom\NamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namespaceinfo.php" title="Dom\NamespaceInfo">Dom\NamespaceInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-node.php" title="Dom\Node">Dom\Node</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-nodelist.php" title="Dom\NodeList">Dom\NodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-notation.php" title="Dom\Notation">Dom\Notation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-parentnode.php" title="Dom\ParentNode">Dom\ParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-processinginstruction.php" title="Dom\ProcessingInstruction">Dom\ProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-text.php" title="Dom\Text">Dom\Text</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-tokenlist.php" title="Dom\TokenList">Dom\TokenList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xmldocument.php" title="Dom\XMLDocument">Dom\XMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xpath.php" title="Dom\XPath">Dom\XPath</a>
                        </li>
                                                <li class="">
                            <a href="ref.dom.php" title="DOM Functions">DOM Functions</a>
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
