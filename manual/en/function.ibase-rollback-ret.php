<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ibase_rollback_ret - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ibase-rollback-ret.php">
 <link rel="shorturl" href="https://www.php.net/ibase-rollback-ret">
 <link rel="alternate" href="https://www.php.net/ibase-rollback-ret" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ibase.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ibase-rollback.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ibase-server-info.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ibase-rollback-ret.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ibase-rollback-ret.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ibase-rollback-ret.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ibase-rollback-ret.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ibase-rollback-ret.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ibase-rollback-ret.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ibase-rollback-ret.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ibase-rollback-ret.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ibase-rollback-ret.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ibase-rollback-ret.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ibase-rollback-ret.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Roll back a transaction without closing it" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ibase_rollback_ret - Manual" />
<meta name="twitter:description" content="Roll back a transaction without closing it" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ibase_rollback_ret - Manual" />
<meta itemprop="description" content="Roll back a transaction without closing it" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Roll back a transaction without closing it" />

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
        <a href="function.ibase-server-info.php">
          ibase_server_info &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ibase-rollback.php">
          &laquo; ibase_rollback        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibase.php'>Firebird/InterBase</a></li>      <li><a href='ref.ibase.php'>Firebird/InterBase Functions</a></li>      </ul>
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
            <option value='en/function.ibase-rollback-ret.php' selected="selected">English</option>
            <option value='de/function.ibase-rollback-ret.php'>German</option>
            <option value='es/function.ibase-rollback-ret.php'>Spanish</option>
            <option value='fr/function.ibase-rollback-ret.php'>French</option>
            <option value='it/function.ibase-rollback-ret.php'>Italian</option>
            <option value='ja/function.ibase-rollback-ret.php'>Japanese</option>
            <option value='pt_BR/function.ibase-rollback-ret.php'>Brazilian Portuguese</option>
            <option value='ru/function.ibase-rollback-ret.php'>Russian</option>
            <option value='tr/function.ibase-rollback-ret.php'>Turkish</option>
            <option value='uk/function.ibase-rollback-ret.php'>Ukrainian</option>
            <option value='zh/function.ibase-rollback-ret.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ibase-rollback-ret" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ibase_rollback_ret</h1>
  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_rollback_ret</span> &mdash; <span class="dc-title">Roll back a transaction without closing it</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ibase-rollback-ret-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ibase_rollback_ret</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$link_or_trans_identifier</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Rolls back a transaction without closing it.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ibase-rollback-ret-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">link_or_trans_identifier</code></dt>
     <dd>
      <p class="para">
       If called without an argument, this function rolls back the default
       transaction of the default link. If the argument is a connection
       identifier, the default transaction of the corresponding connection
       will be rolled back. If the argument is a transaction identifier, the
       corresponding transaction will be rolled back. The transaction context
       will be retained, so statements executed from within this transaction
       will not be invalidated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ibase-rollback-ret-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ibase/functions/ibase-rollback-ret.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ibase-rollback-ret%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ibase-rollback-ret&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ibase-rollback-ret.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ibase.php">Firebird/InterBase Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.fbird-add-user.php" title="fbird_&#8203;add_&#8203;user">fbird_&#8203;add_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-affected-rows.php" title="fbird_&#8203;affected_&#8203;rows">fbird_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-backup.php" title="fbird_&#8203;backup">fbird_&#8203;backup</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-add.php" title="fbird_&#8203;blob_&#8203;add">fbird_&#8203;blob_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-cancel.php" title="fbird_&#8203;blob_&#8203;cancel">fbird_&#8203;blob_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-close.php" title="fbird_&#8203;blob_&#8203;close">fbird_&#8203;blob_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-create.php" title="fbird_&#8203;blob_&#8203;create">fbird_&#8203;blob_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-echo.php" title="fbird_&#8203;blob_&#8203;echo">fbird_&#8203;blob_&#8203;echo</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-get.php" title="fbird_&#8203;blob_&#8203;get">fbird_&#8203;blob_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-import.php" title="fbird_&#8203;blob_&#8203;import">fbird_&#8203;blob_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-info.php" title="fbird_&#8203;blob_&#8203;info">fbird_&#8203;blob_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-blob-open.php" title="fbird_&#8203;blob_&#8203;open">fbird_&#8203;blob_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-close.php" title="fbird_&#8203;close">fbird_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-commit.php" title="fbird_&#8203;commit">fbird_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-commit-ret.php" title="fbird_&#8203;commit_&#8203;ret">fbird_&#8203;commit_&#8203;ret</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-connect.php" title="fbird_&#8203;connect">fbird_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-db-info.php" title="fbird_&#8203;db_&#8203;info">fbird_&#8203;db_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-delete-user.php" title="fbird_&#8203;delete_&#8203;user">fbird_&#8203;delete_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-drop-db.php" title="fbird_&#8203;drop_&#8203;db">fbird_&#8203;drop_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-errcode.php" title="fbird_&#8203;errcode">fbird_&#8203;errcode</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-errmsg.php" title="fbird_&#8203;errmsg">fbird_&#8203;errmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-execute.php" title="fbird_&#8203;execute">fbird_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-fetch-assoc.php" title="fbird_&#8203;fetch_&#8203;assoc">fbird_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-fetch-object.php" title="fbird_&#8203;fetch_&#8203;object">fbird_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-fetch-row.php" title="fbird_&#8203;fetch_&#8203;row">fbird_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-field-info.php" title="fbird_&#8203;field_&#8203;info">fbird_&#8203;field_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-free-event-handler.php" title="fbird_&#8203;free_&#8203;event_&#8203;handler">fbird_&#8203;free_&#8203;event_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-free-query.php" title="fbird_&#8203;free_&#8203;query">fbird_&#8203;free_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-free-result.php" title="fbird_&#8203;free_&#8203;result">fbird_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-gen-id.php" title="fbird_&#8203;gen_&#8203;id">fbird_&#8203;gen_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-maintain-db.php" title="fbird_&#8203;maintain_&#8203;db">fbird_&#8203;maintain_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-modify-user.php" title="fbird_&#8203;modify_&#8203;user">fbird_&#8203;modify_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-name-result.php" title="fbird_&#8203;name_&#8203;result">fbird_&#8203;name_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-num-fields.php" title="fbird_&#8203;num_&#8203;fields">fbird_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-num-params.php" title="fbird_&#8203;num_&#8203;params">fbird_&#8203;num_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-param-info.php" title="fbird_&#8203;param_&#8203;info">fbird_&#8203;param_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-pconnect.php" title="fbird_&#8203;pconnect">fbird_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-prepare.php" title="fbird_&#8203;prepare">fbird_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-query.php" title="fbird_&#8203;query">fbird_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-restore.php" title="fbird_&#8203;restore">fbird_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-rollback.php" title="fbird_&#8203;rollback">fbird_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-rollback-ret.php" title="fbird_&#8203;rollback_&#8203;ret">fbird_&#8203;rollback_&#8203;ret</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-server-info.php" title="fbird_&#8203;server_&#8203;info">fbird_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-service-attach.php" title="fbird_&#8203;service_&#8203;attach">fbird_&#8203;service_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-service-detach.php" title="fbird_&#8203;service_&#8203;detach">fbird_&#8203;service_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-set-event-handler.php" title="fbird_&#8203;set_&#8203;event_&#8203;handler">fbird_&#8203;set_&#8203;event_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-trans.php" title="fbird_&#8203;trans">fbird_&#8203;trans</a>
                        </li>
                                                <li class="">
                            <a href="function.fbird-wait-event.php" title="fbird_&#8203;wait_&#8203;event">fbird_&#8203;wait_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-add-user.php" title="ibase_&#8203;add_&#8203;user">ibase_&#8203;add_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-affected-rows.php" title="ibase_&#8203;affected_&#8203;rows">ibase_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-backup.php" title="ibase_&#8203;backup">ibase_&#8203;backup</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-add.php" title="ibase_&#8203;blob_&#8203;add">ibase_&#8203;blob_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-cancel.php" title="ibase_&#8203;blob_&#8203;cancel">ibase_&#8203;blob_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-close.php" title="ibase_&#8203;blob_&#8203;close">ibase_&#8203;blob_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-create.php" title="ibase_&#8203;blob_&#8203;create">ibase_&#8203;blob_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-echo.php" title="ibase_&#8203;blob_&#8203;echo">ibase_&#8203;blob_&#8203;echo</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-get.php" title="ibase_&#8203;blob_&#8203;get">ibase_&#8203;blob_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-import.php" title="ibase_&#8203;blob_&#8203;import">ibase_&#8203;blob_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-info.php" title="ibase_&#8203;blob_&#8203;info">ibase_&#8203;blob_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-blob-open.php" title="ibase_&#8203;blob_&#8203;open">ibase_&#8203;blob_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-close.php" title="ibase_&#8203;close">ibase_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-commit.php" title="ibase_&#8203;commit">ibase_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-commit-ret.php" title="ibase_&#8203;commit_&#8203;ret">ibase_&#8203;commit_&#8203;ret</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-connect.php" title="ibase_&#8203;connect">ibase_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-db-info.php" title="ibase_&#8203;db_&#8203;info">ibase_&#8203;db_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-delete-user.php" title="ibase_&#8203;delete_&#8203;user">ibase_&#8203;delete_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-drop-db.php" title="ibase_&#8203;drop_&#8203;db">ibase_&#8203;drop_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-errcode.php" title="ibase_&#8203;errcode">ibase_&#8203;errcode</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-errmsg.php" title="ibase_&#8203;errmsg">ibase_&#8203;errmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-execute.php" title="ibase_&#8203;execute">ibase_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-fetch-assoc.php" title="ibase_&#8203;fetch_&#8203;assoc">ibase_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-fetch-object.php" title="ibase_&#8203;fetch_&#8203;object">ibase_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-fetch-row.php" title="ibase_&#8203;fetch_&#8203;row">ibase_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-field-info.php" title="ibase_&#8203;field_&#8203;info">ibase_&#8203;field_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-free-event-handler.php" title="ibase_&#8203;free_&#8203;event_&#8203;handler">ibase_&#8203;free_&#8203;event_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-free-query.php" title="ibase_&#8203;free_&#8203;query">ibase_&#8203;free_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-free-result.php" title="ibase_&#8203;free_&#8203;result">ibase_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-gen-id.php" title="ibase_&#8203;gen_&#8203;id">ibase_&#8203;gen_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-maintain-db.php" title="ibase_&#8203;maintain_&#8203;db">ibase_&#8203;maintain_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-modify-user.php" title="ibase_&#8203;modify_&#8203;user">ibase_&#8203;modify_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-name-result.php" title="ibase_&#8203;name_&#8203;result">ibase_&#8203;name_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-num-fields.php" title="ibase_&#8203;num_&#8203;fields">ibase_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-num-params.php" title="ibase_&#8203;num_&#8203;params">ibase_&#8203;num_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-param-info.php" title="ibase_&#8203;param_&#8203;info">ibase_&#8203;param_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-pconnect.php" title="ibase_&#8203;pconnect">ibase_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-prepare.php" title="ibase_&#8203;prepare">ibase_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-query.php" title="ibase_&#8203;query">ibase_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-restore.php" title="ibase_&#8203;restore">ibase_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-rollback.php" title="ibase_&#8203;rollback">ibase_&#8203;rollback</a>
                        </li>
                                                <li class="current">
                            <a href="function.ibase-rollback-ret.php" title="ibase_&#8203;rollback_&#8203;ret">ibase_&#8203;rollback_&#8203;ret</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-server-info.php" title="ibase_&#8203;server_&#8203;info">ibase_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-service-attach.php" title="ibase_&#8203;service_&#8203;attach">ibase_&#8203;service_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-service-detach.php" title="ibase_&#8203;service_&#8203;detach">ibase_&#8203;service_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-set-event-handler.php" title="ibase_&#8203;set_&#8203;event_&#8203;handler">ibase_&#8203;set_&#8203;event_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-trans.php" title="ibase_&#8203;trans">ibase_&#8203;trans</a>
                        </li>
                                                <li class="">
                            <a href="function.ibase-wait-event.php" title="ibase_&#8203;wait_&#8203;event">ibase_&#8203;wait_&#8203;event</a>
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
