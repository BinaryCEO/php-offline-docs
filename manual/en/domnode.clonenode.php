<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode::cloneNode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domnode.clonenode.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domnode.clonenode.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domnode.clonenode.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnode.c14nfile.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.comparedocumentposition.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domnode.clonenode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domnode.clonenode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domnode.clonenode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domnode.clonenode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domnode.clonenode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domnode.clonenode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domnode.clonenode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domnode.clonenode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domnode.clonenode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domnode.clonenode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domnode.clonenode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Clones a node" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode::cloneNode - Manual" />
<meta name="twitter:description" content="Clones a node" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode::cloneNode - Manual" />
<meta itemprop="description" content="Clones a node" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Clones a node" />

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
        <a href="domnode.comparedocumentposition.php">
          DOMNode::compareDocumentPosition &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnode.c14nfile.php">
          &laquo; DOMNode::C14NFile        </a>
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
            <option value='en/domnode.clonenode.php' selected="selected">English</option>
            <option value='de/domnode.clonenode.php'>German</option>
            <option value='es/domnode.clonenode.php'>Spanish</option>
            <option value='fr/domnode.clonenode.php'>French</option>
            <option value='it/domnode.clonenode.php'>Italian</option>
            <option value='ja/domnode.clonenode.php'>Japanese</option>
            <option value='pt_BR/domnode.clonenode.php'>Brazilian Portuguese</option>
            <option value='ru/domnode.clonenode.php'>Russian</option>
            <option value='tr/domnode.clonenode.php'>Turkish</option>
            <option value='uk/domnode.clonenode.php'>Ukrainian</option>
            <option value='zh/domnode.clonenode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domnode.clonenode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMNode::cloneNode</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMNode::cloneNode</span> &mdash; <span class="dc-title">
   Clones a node
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domnode.clonenode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMNode::cloneNode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$deep</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates a copy of the node. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domnode.clonenode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">deep</code></dt>
     <dd>
      <p class="para">
       Indicates whether to copy all descendant nodes. This parameter is 
       defaulted to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domnode.clonenode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The cloned node.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode/clonenode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomnode.clonenode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domnode.clonenode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.clonenode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110753">  <div class="votes">
    <div id="Vu110753">
    <a href="/manual/vote-note.php?id=110753&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110753">
    <a href="/manual/vote-note.php?id=110753&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110753" title="83% like this...">
    8
    </div>
  </div>
  <a href="#110753" class="name">
  <strong class="user"><em>frame at dynamiccreated dot de</em></strong></a><a class="genanchor" href="#110753"> &para;</a><div class="date" title="2012-12-02 02:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110753">
<div class="phpcode"><code><span class="html">Remeber that DOMNode always needs a reference to a parent node or DOMDocument.<br /><br />For example, if you try to clone a node - copy all children - and overwrite or delete the variable which holds the cloned node - all children will loose any reference and getting invalid.<br /><br />This will cause a nice message like "Couldn't... node no longer exists" if you have luck. In most cases PHP only gives you the poor information "Couldn't fetch DOM[...]" which makes hard to find out whats going on, depending on the current operation.</span></code></div>
  </div>
 </div>
  <div class="note" id="88969">  <div class="votes">
    <div id="Vu88969">
    <a href="/manual/vote-note.php?id=88969&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88969">
    <a href="/manual/vote-note.php?id=88969&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88969" title="72% like this...">
    5
    </div>
  </div>
  <a href="#88969" class="name">
  <strong class="user"><em>[montana] at [percepticon] dot [com]</em></strong></a><a class="genanchor" href="#88969"> &para;</a><div class="date" title="2009-02-16 02:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88969">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//@oliver thanks for example source...<br /><br />/*<br /> cloneNode(false) does not omit <br /> Attributes of cloned node, <br /> to achieve this an iteration is required. <br /> this is probably less efficient <br /> than merely creating a new <br /> node from the desired nodeName <br /> but in some cases could be useful.<br /><br />use case: <br /><br />omit subnodes and attributes of <br />secured portions of an xml document <br />without altering expected general structure;<br />*/<br />//xml to use<br /><br /></span><span class="default">$file</span><span class="keyword">=</span><span class="string">"&lt;?xml version='1.0'?&gt;<br />&lt;book type='paperback'&gt;<br />    &lt;title name='MAP'&gt;Red Nails&lt;/title&gt;<br />    &lt;price&gt;$12.99&lt;/price&gt;<br />    &lt;author&gt;<br />        &lt;name first='Robert' middle='E' last='Howard'/&gt;<br />        &lt;birthdate disco='false' nirvana='definitely'&gt;<br />            9/21/1977 <br />            &lt;month title='september' /&gt;<br />        &lt;/birthdate&gt;<br />    &lt;/author&gt;<br />    &lt;author&gt;<br />        &lt;name first='Arthur' middle='Mc' last='Kayn'/&gt;<br />    &lt;/author&gt;<br />&lt;/book&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">domDocument</span><span class="keyword">;<br /><br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">domXPath</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">);<br /><br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"//author/birthdate"</span><span class="keyword">;<br /></span><span class="default">$xpathQuery </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br /></span><span class="comment">//would be a loop in production code...<br /></span><span class="default">$child </span><span class="keyword">= </span><span class="default">$xpathQuery</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); <br /><br /></span><span class="default">$parent </span><span class="keyword">= </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">;<br /><br /></span><span class="default">$doppel </span><span class="keyword">= </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">$limit </span><span class="keyword">= </span><span class="default">$doppel</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br /><br />for (</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">$limit</span><span class="keyword">;</span><span class="default">$a</span><span class="keyword">++) {<br />    </span><span class="default">$doppel</span><span class="keyword">-&gt;</span><span class="default">removeAttributeNode</span><span class="keyword">(</span><span class="default">$doppel</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />}<br /></span><span class="comment">//swap for now empty node<br /></span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">replaceChild</span><span class="keyword">( </span><span class="default">$doppel</span><span class="keyword">, </span><span class="default">$child</span><span class="keyword">); <br /><br />print </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120173">  <div class="votes">
    <div id="Vu120173">
    <a href="/manual/vote-note.php?id=120173&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120173">
    <a href="/manual/vote-note.php?id=120173&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120173" title="75% like this...">
    2
    </div>
  </div>
  <a href="#120173" class="name">
  <strong class="user"><em>cmd at 1xinternet dot de</em></strong></a><a class="genanchor" href="#120173"> &para;</a><div class="date" title="2016-11-16 12:11"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120173">
<div class="phpcode"><code><span class="html">If you need to clone node including all child DOMNode elements:<br /><br />private function cloneNode($node){<br /><br />        $nd = new DOMNode();<br /><br />        for ($i = 0; $i &lt; $node-&gt;childNodes-&gt;length; $i++) {<br />            $child = $node-&gt;childNodes-&gt;item($i);<br />            if ($child-&gt;nodeType === XML_TEXT_NODE) {<br />                $nd-&gt;appendChild($node-&gt;cloneNode(true));<br />            }<br />            else{<br />                $nd-&gt;appendChild($this-&gt;cloneNode($child));<br />            }<br />        }<br /><br />        return $nd;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="90559">  <div class="votes">
    <div id="Vu90559">
    <a href="/manual/vote-note.php?id=90559&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90559">
    <a href="/manual/vote-note.php?id=90559&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90559" title="62% like this...">
    2
    </div>
  </div>
  <a href="#90559" class="name">
  <strong class="user"><em>cemkalyoncu at gmail dot com</em></strong></a><a class="genanchor" href="#90559"> &para;</a><div class="date" title="2009-04-28 03:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90559">
<div class="phpcode"><code><span class="html">If you need some function to clone a node without touching namespaces you can use the following.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">private function </span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">,</span><span class="default">$doc</span><span class="keyword">){<br />    </span><span class="default">$nd</span><span class="keyword">=</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">);<br />            <br />    foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">)<br />        </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">);<br />            <br />    if(!</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">) <br />        return </span><span class="default">$nd</span><span class="keyword">;<br />                <br />    foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {<br />        if(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">==</span><span class="string">"#text"</span><span class="keyword">)<br />            </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">));<br />        else<br />            </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">,</span><span class="default">$doc</span><span class="keyword">));<br />    }<br />            <br />    return </span><span class="default">$nd</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115836">  <div class="votes">
    <div id="Vu115836">
    <a href="/manual/vote-note.php?id=115836&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115836">
    <a href="/manual/vote-note.php?id=115836&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115836" title="100% like this...">
    2
    </div>
  </div>
  <a href="#115836" class="name">
  <strong class="user"><em>h-fate at gmx dot net</em></strong></a><a class="genanchor" href="#115836"> &para;</a><div class="date" title="2014-10-01 07:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115836">
<div class="phpcode"><code><span class="html">If you have an object that holds a DOMNode, cloning the object won't clone the DOMNode with it. If you simply copy the object or add its DOMNode several times, you will in fact only move the DOMNode in the tree, not multiply it. That might seem obvious, but took me half a day to find out.<br /><br />The object needs to use __clone and clone the node manually:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">containsNode </span><span class="keyword">{<br />    public </span><span class="default">$node</span><span class="keyword">; </span><span class="comment">//set from somewhere<br /><br />    </span><span class="keyword">public function </span><span class="default">__clone</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">node </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">node</span><span class="keyword">-&gt;</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47542">  <div class="votes">
    <div id="Vu47542">
    <a href="/manual/vote-note.php?id=47542&amp;page=domnode.clonenode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47542">
    <a href="/manual/vote-note.php?id=47542&amp;page=domnode.clonenode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47542" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#47542" class="name">
  <strong class="user"><em>oliver dot christen at camptocamp dot com</em></strong></a><a class="genanchor" href="#47542"> &para;</a><div class="date" title="2004-11-19 08:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47542">
<div class="phpcode"><code><span class="html">simple exemple of node cloning
<br />
<br />&lt;?xml version="1.0"?&gt;
<br />
<br />&lt;book type="paperback"&gt;
<br />    &lt;title name='MAP'&gt;Red Nails&lt;/title&gt;
<br />    &lt;price&gt;$12.99&lt;/price&gt;
<br />    &lt;author&gt;
<br />        &lt;name first="Robert" middle="E" last="Howard"/&gt;
<br />        &lt;birthdate&gt;9/21/1977&lt;/birthdate&gt;
<br />    &lt;/author&gt;
<br />    &lt;author&gt;
<br />        &lt;name first="Arthur" middle="Mc" last="Kayn"/&gt;
<br />    &lt;/author&gt;
<br />&lt;/book&gt;
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//filename xml file to use
<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">'book.xml'</span><span class="keyword">;
<br />
<br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">domDocument</span><span class="keyword">;
<br />
<br />if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />} else {
<br />    exit(</span><span class="string">'Erreur !.'</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">domXPath</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">);
<br />
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"//author/*"</span><span class="keyword">;
<br /></span><span class="default">$xpathQuery </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);
<br />
<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">$xpathQuery</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;
<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />    </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$xpathQuery</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />    if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="string">'birthdate' </span><span class="keyword">&amp;&amp; </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">() &amp;&amp; </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">textContent </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">){
<br />        </span><span class="default">$clonenode </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">$refnode </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">;
<br />    }
<br />}
<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />    </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$xpathQuery</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />    if (!</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">isSameNode</span><span class="keyword">(</span><span class="default">$refnode</span><span class="keyword">)){
<br />        </span><span class="default">$newnode </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$clonenode</span><span class="keyword">);
<br />    }
<br />}
<br />
<br />print </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domnode.clonenode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domnode.clonenode.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
