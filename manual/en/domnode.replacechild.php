<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode::replaceChild - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domnode.replacechild.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnode.replacechild.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnode.replacechild.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.removechild.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.sleep.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnode.replacechild.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnode.replacechild.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnode.replacechild.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnode.replacechild.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnode.replacechild.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnode.replacechild.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnode.replacechild.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnode.replacechild.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnode.replacechild.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnode.replacechild.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnode.replacechild.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Replaces a child" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode::replaceChild - Manual" />
<meta name="twitter:description" content="Replaces a child" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode::replaceChild - Manual" />
<meta itemprop="description" content="Replaces a child" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Replaces a child" />

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
        <a href="domnode.sleep.php">
          DOMNode::__sleep &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.removechild.php">
          &laquo; DOMNode::removeChild        </a>
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
            <option value='en/domnode.replacechild.php' selected="selected">English</option>
            <option value='de/domnode.replacechild.php'>German</option>
            <option value='es/domnode.replacechild.php'>Spanish</option>
            <option value='fr/domnode.replacechild.php'>French</option>
            <option value='it/domnode.replacechild.php'>Italian</option>
            <option value='ja/domnode.replacechild.php'>Japanese</option>
            <option value='pt_BR/domnode.replacechild.php'>Brazilian Portuguese</option>
            <option value='ru/domnode.replacechild.php'>Russian</option>
            <option value='tr/domnode.replacechild.php'>Turkish</option>
            <option value='uk/domnode.replacechild.php'>Ukrainian</option>
            <option value='zh/domnode.replacechild.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnode.replacechild" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNode::replaceChild</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNode::replaceChild</span> &mdash; <span class="dc-title">
   Replaces a child
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domnode.replacechild-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNode::replaceChild</strong></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function replaces the child <code class="parameter">child</code> 
   with the passed new node. If the <code class="parameter">node</code> is already a child it 
   will not be added a second time. If the replacement succeeds the 
   old node is returned.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domnode.replacechild-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">node</code></dt>
     <dd>
      <p class="para">
       The new node. It must be a member of the target document, i.e.
       created by one of the DOMDocument-&gt;createXXX() methods or imported in
       the document by <a href="domdocument.importnode.php" class="xref">DOMDocument::importNode</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">child</code></dt>
     <dd>
      <p class="para">
       The old node.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domnode.replacechild-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The old node or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occur.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domnode.replacechild-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-no-modification-allowed-err">DOM_NO_MODIFICATION_ALLOWED_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if this node is readonly or if the previous parent of the node
       being inserted is readonly.
      </p>
     </dd>
    
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-hierarchy-request-err">DOM_HIERARCHY_REQUEST_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if this node is of a type that does not allow children of the 
       type of the <code class="parameter">node</code> node, or if the node to 
       put in is one of this node&#039;s ancestors or this node itself.
      </p>
     </dd>
    
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-wrong-document-err">DOM_WRONG_DOCUMENT_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">node</code> was created from a different 
       document than the one that created this node.
      </p>
     </dd>
    
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-not-found-err">DOM_NOT_FOUND_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">child</code> is not a child of this node.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domnode.replacechild-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domchildnode.replacewith.php" class="methodname" rel="rdfs-seeAlso">DOMChildNode::replaceWith()</a> - Replaces the node with new nodes</span></li>
    <li><span class="methodname"><a href="domnode.appendchild.php" class="methodname" rel="rdfs-seeAlso">DOMNode::appendChild()</a> - Adds new child at the end of the children</span></li>
    <li><span class="methodname"><a href="domnode.removechild.php" class="methodname" rel="rdfs-seeAlso">DOMNode::removeChild()</a> - Removes child from list of children</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode/replacechild.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnode.replacechild%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnode.replacechild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.replacechild.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="50500">  <div class="votes">
    <div id="Vu50500">
    <a href="/manual/vote-note.php?id=50500&amp;page=domnode.replacechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50500">
    <a href="/manual/vote-note.php?id=50500&amp;page=domnode.replacechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50500" title="82% like this...">
    29
    </div>
  </div>
  <a href="#50500" class="name">
  <strong class="user"><em>jb at jbpros dot com</em></strong></a><a class="genanchor" href="#50500"> &para;</a><div class="date" title="2005-03-01 08:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50500">
<div class="phpcode"><code><span class="html">If you are trying to replace more than one node at once, you have to be careful about iterating over the DOMNodeList.  If the old node has a different name from the new node, it will be removed from the list once it has been replaced.  Use a regressive loop:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'docfile.xml'</span><span class="keyword">);
<br />
<br /></span><span class="default">$elements </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagNameNS</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/NS/" rel="nofollow" target="_blank">http://www.example.com/NS/</a>'</span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">);
<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">$elements</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />while (</span><span class="default">$i </span><span class="keyword">&gt; -</span><span class="default">1</span><span class="keyword">) {
<br />    </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$elements</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />    </span><span class="default">$ignore </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />    </span><span class="default">$newelement </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">'Some new node!'</span><span class="keyword">);
<br />    </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">(</span><span class="default">$newelement</span><span class="keyword">, </span><span class="default">$element</span><span class="keyword">);
<br />    </span><span class="default">$i</span><span class="keyword">--;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />The loop counter ($i) will always be in the list's interval as removed elements indexes are above the counter.</span></code></div>
  </div>
 </div>
  <div class="note" id="48485">  <div class="votes">
    <div id="Vu48485">
    <a href="/manual/vote-note.php?id=48485&amp;page=domnode.replacechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48485">
    <a href="/manual/vote-note.php?id=48485&amp;page=domnode.replacechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48485" title="80% like this...">
    12
    </div>
  </div>
  <a href="#48485" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#48485"> &para;</a><div class="date" title="2004-12-26 02:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48485">
<div class="phpcode"><code><span class="html">Here is a simple example for replacing a node:<br /><br />Let's define our XML like so:<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />  &lt;parent&gt;<br />     &lt;child&gt;bar&lt;/child&gt;<br />     &lt;child&gt;foo&lt;/child&gt;<br />  &lt;/parent&gt;<br />&lt;/root&gt;<br /></span><span class="keyword">XML;<br /></span><span class="default">?&gt;<br /></span><br />If we wanted to replace the entire &lt;parent&gt; node, we could do something like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Create a new document fragment to hold the new &lt;parent&gt; node<br /></span><span class="default">$parent </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br /></span><span class="default">$parent_node </span><span class="keyword">= </span><span class="default">$parent </span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'parent'</span><span class="keyword">);<br /><br /></span><span class="comment">// Add some children<br /></span><span class="default">$parent_node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'child'</span><span class="keyword">, </span><span class="string">'somevalue'</span><span class="keyword">));<br /></span><span class="default">$parent_node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'child'</span><span class="keyword">, </span><span class="string">'anothervalue'</span><span class="keyword">));<br /><br /></span><span class="comment">// Add the keywordset into the new document<br />// The $parent variable now holds the new node as a document fragment<br /></span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$parent_node</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Next, we need to locate the old node:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Load the XML<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="comment">// Locate the old parent node<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXpath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">$nodelist </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'/root/parent'</span><span class="keyword">);<br /></span><span class="default">$oldnode </span><span class="keyword">= </span><span class="default">$nodelist</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />We then import and replace the new node:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Load the $parent document fragment into the current document<br /></span><span class="default">$newnode </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Replace<br /></span><span class="default">$oldnode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">(</span><span class="default">$newnode</span><span class="keyword">, </span><span class="default">$oldnode</span><span class="keyword">);<br /><br /></span><span class="comment">// Display<br /></span><span class="keyword">echo </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Our new node is successfully imported:<br /><br />&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />&lt;parent&gt;&lt;child&gt;somevalue&lt;/child&gt;&lt;child&gt;anothervalue&lt;/child&gt;&lt;/parent&gt;<br />&lt;/root&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="45921">  <div class="votes">
    <div id="Vu45921">
    <a href="/manual/vote-note.php?id=45921&amp;page=domnode.replacechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45921">
    <a href="/manual/vote-note.php?id=45921&amp;page=domnode.replacechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45921" title="75% like this...">
    2
    </div>
  </div>
  <a href="#45921" class="name">
  <strong class="user"><em>franp at free dot fr</em></strong></a><a class="genanchor" href="#45921"> &para;</a><div class="date" title="2004-09-23 08:39"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45921">
<div class="phpcode"><code><span class="html">1) If your XPath query returns a NodeList including a unique item, or if you know for sure the order of the items returned, you can use the "item(n)" syntax instead of the "foreach" syntax.
<br />This can greatly improve you code lisibility.
<br />s the method name implies, replaceChild cannot replace a node itself but a child of a node.
<br />The trick is to use replaceChild on the parent node of your Xpath query result.
<br />
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br /> &lt;actionGlobal&gt;
<br />  &lt;actionGlobalFR&gt;sometext&lt;/actionGlobalFR&gt;
<br /> &lt;actionGlobal&gt;
<br />&lt;/action&gt;
<br />
<br />$frag = $doc-&gt;createElement("actionGlobalFR");   
<br />$fragA = $doc-&gt;createTextNode("anothertext");
<br />$frag-&gt;appendChild($fragA);
<br />      
<br />$xpResult = $xp-&gt;query("/action/actionGlobal/actionGlobalFR");   
<br />$blipblip = $xpResult-&gt;item(0)-&gt;parentNode-&gt;replaceChild($ajout, $xpResult-&gt;item(0));
<br />
<br />2) Also, as the method name implies, replaceChild cannot replace a node itself but a child of a node.
<br />Still it is possible to replace a node pointed by XPath istead of its child. 
<br />The trick is to use replaceChild on the parent node of your Xpath query result.
<br />
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br />  &lt;FR&gt;French Text&lt;/FR&gt;
<br />&lt;/action&gt;
<br />
<br /><span class="default">&lt;?php
<br />$frag </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">"EN"</span><span class="keyword">);   
<br /></span><span class="default">$fragA </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"English Text"</span><span class="keyword">);
<br /></span><span class="default">$frag</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$fragA</span><span class="keyword">);
<br />      
<br /></span><span class="default">$xpResult </span><span class="keyword">= </span><span class="default">$xp</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"/action/FR"</span><span class="keyword">);   
<br /></span><span class="default">$blipblip </span><span class="keyword">= </span><span class="default">$xpResult</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">(</span><span class="default">$fragA</span><span class="keyword">, </span><span class="default">$xpResult</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Et voil� !
<br />
<br />This produces :
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br />  &lt;EN&gt;English Text&lt;/EN&gt;
<br />&lt;/action&gt;
<br />
<br />....................................................
<br />
<br />3) Also, be carefull, you CANNOT replace a node that doesn't exist.
<br />While this may seems obvious, it is easy to forget.
<br />
<br />Consider this :
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br />  &lt;EN&gt;&lt;/EN&gt;
<br />&lt;/action&gt;
<br />
<br />You cannot use replaceChild() to turn this into :
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br />  &lt;EN&gt;Some text&lt;/EN&gt;
<br />&lt;/action&gt;
<br />
<br />The reason is that since the &lt;EN&gt;&lt;/EN&gt; element is empty, it has no child (this is clearer to understand if you consider that &lt;EN&gt;&lt;/EN&gt; can be written &lt;EN /&gt;).
<br />The fact that you intend to put some text inbetween &lt;EN&gt; and &lt;/EN&gt; does not change the fact that it has no text yet, thus no child yet.
<br />When dealing with DOM, do not take your dream for the reality. The DOM parser doen't care about your dreams. If an element is currently empty, it has no child, whatever you intend to fill in.
<br />
<br />Thus, the solution to teh problem is to use appendChild intead of replaceChild :
<br />
<br /><span class="default">&lt;?php
<br />$fragA </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"Some Text"</span><span class="keyword">);
<br /></span><span class="default">$xpResult </span><span class="keyword">= </span><span class="default">$xp</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"/action/EN"</span><span class="keyword">);   
<br /></span><span class="default">$blipblip </span><span class="keyword">= </span><span class="default">$xpResult</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$fragA</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This produces the awaited :
<br />&lt;?xml version="1.0" ?&gt;
<br />&lt;action&gt;
<br />  &lt;EN&gt;Some Text&lt;/EN&gt;
<br />&lt;/action&gt;
<br />
<br />....................................................
<br />
<br />4) Note that the description of replaceChild in the doc is wrong. Arguments have been inverted.
<br />The correct description is :
<br />object DOMNode-&gt;replaceChild (object newnode, object oldnode)</span></code></div>
  </div>
 </div>
  <div class="note" id="123037">  <div class="votes">
    <div id="Vu123037">
    <a href="/manual/vote-note.php?id=123037&amp;page=domnode.replacechild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123037">
    <a href="/manual/vote-note.php?id=123037&amp;page=domnode.replacechild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123037" title="no votes...">
    0
    </div>
  </div>
  <a href="#123037" class="name">
  <strong class="user"><em>chealer at gmail dot com</em></strong></a><a class="genanchor" href="#123037"> &para;</a><div class="date" title="2018-08-15 03:07"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123037">
<div class="phpcode"><code><span class="html">As of version 5.6, PHP still behaves as reported by jb at jbpros dot com. To use replaceChild() in a loop, the more standard pattern used in the following example can be used:<br /><br />for ($currentNode = 0; $currentNode &lt; $link-&gt;childNodes-&gt;length; $currentNode++) {<br />    $child = $link-&gt;childNodes[$currentNode];<br /><br />    // "Remove" links, since links can't contain links<br />    if ($child instanceof DOMElement &amp;&amp; $child-&gt;tagName == 'a') {<br />        $replacement = $dom-&gt;createTextNode($child-&gt;textContent);<br />        $link-&gt;replaceChild($replacement, $child);<br />    }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnode.replacechild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.replacechild.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domnode.php">DOMNode</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domnode.appendchild.php" title="appendChild">appendChild</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
