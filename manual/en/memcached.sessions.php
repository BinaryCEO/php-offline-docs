<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Sessions support - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.sessions.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.sessions.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.sessions.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.memcached.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.callbacks.read-through.php">
 <link rel="next" href="https://www.php.net/manual/en/class.memcached.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.sessions.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.sessions.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.sessions.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.sessions.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.sessions.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.sessions.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.sessions.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.sessions.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.sessions.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.sessions.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.sessions.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sessions support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Sessions support - Manual" />
<meta name="twitter:description" content="Sessions support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Sessions support - Manual" />
<meta itemprop="description" content="Sessions support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sessions support" />

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
        <a href="class.memcached.php">
          Memcached &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.callbacks.read-through.php">
          &laquo; Read-through cache callbacks        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcached.php'>Memcached</a></li>      </ul>
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
            <option value='en/memcached.sessions.php' selected="selected">English</option>
            <option value='de/memcached.sessions.php'>German</option>
            <option value='es/memcached.sessions.php'>Spanish</option>
            <option value='fr/memcached.sessions.php'>French</option>
            <option value='it/memcached.sessions.php'>Italian</option>
            <option value='ja/memcached.sessions.php'>Japanese</option>
            <option value='pt_BR/memcached.sessions.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.sessions.php'>Russian</option>
            <option value='tr/memcached.sessions.php'>Turkish</option>
            <option value='uk/memcached.sessions.php'>Ukrainian</option>
            <option value='zh/memcached.sessions.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.sessions" class="chapter">
 <h1 class="title">Sessions support</h1>

 <p class="para">Memcached provides a custom session handler that can be used to store
  user sessions in memcache. A completely separate memcached instance is used
  for that internally, so you can use a different server pool if necessary. The
  session keys are stored under the prefix
  <code class="literal">memc.sess.key.</code>, so be aware of this if you use the
  same server pool for sessions and generic caching.</p>
 <p class="para">
  <dl>

   
    <dt id="memcache.sessions.save-handler">
     <code class="parameter">session.save_handler</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Set to <code class="literal">memcached</code> to enable sessions support.
     </p>
    </dd>
   

   
    <dt id="memcache.sessions.save-path">
     <code class="parameter">session.save_path</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Defines a comma separated of <code class="literal">hostname:port</code> entries to
      use for session server pool, for example
      <code class="literal">&quot;sess1:11211, sess2:11211&quot;</code>.
     </p>
    </dd>
   

  </dl>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/sessions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.sessions%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.sessions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.sessions.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99646">  <div class="votes">
    <div id="Vu99646">
    <a href="/manual/vote-note.php?id=99646&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99646">
    <a href="/manual/vote-note.php?id=99646&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99646" title="80% like this...">
    79
    </div>
  </div>
  <a href="#99646" class="name">
  <strong class="user"><em>nfoo at naver dot com</em></strong></a><a class="genanchor" href="#99646"> &para;</a><div class="date" title="2010-08-28 12:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99646">
<div class="phpcode"><code><span class="html">If you want to use 'memcacheD' extention not 'memcache' (there are two diffrent extentions) for session control,  you should pay attention to modify php.ini
<br />
<br />Most web resource from google is based on memcache because It's earlier version than memcacheD. They will say as following
<br />
<br />session.save_handler = memcache
<br />session.save_path = "tcp://localhost:11211"
<br />
<br />But it's not valid when it comes to memcacheD
<br />
<br />you should modify php.ini like that
<br />
<br />session.save_handler = memcached
<br />session.save_path = "localhost:11211"
<br />
<br />Look, there is no protocol indentifier</span></code></div>
  </div>
 </div>
  <div class="note" id="112439">  <div class="votes">
    <div id="Vu112439">
    <a href="/manual/vote-note.php?id=112439&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112439">
    <a href="/manual/vote-note.php?id=112439&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112439" title="80% like this...">
    18
    </div>
  </div>
  <a href="#112439" class="name">
  <strong class="user"><em>richard at fussenegger dot info</em></strong></a><a class="genanchor" href="#112439"> &para;</a><div class="date" title="2013-06-16 08:56"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112439">
<div class="phpcode"><code><span class="html">The documentation is not complete, you can also pass the weight of each server and you can use sockets if you want. In your PHP ini:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Sockets with weight in the format socket_path:port:weight<br /></span><span class="default">session</span><span class="keyword">.</span><span class="default">save_path </span><span class="keyword">= </span><span class="string">"/path/to/socket:0:42"<br /><br /></span><span class="comment">// Or more than one so that weight makes sense?<br /></span><span class="default">session</span><span class="keyword">.</span><span class="default">save_path </span><span class="keyword">= </span><span class="string">"/path/to/socket_x:0:42,/path/to/socket_y:0:666"<br /><br /></span><span class="default">?&gt;<br /></span><br />And if you should ever want to access these servers in PHP:<br /><br /><span class="default">&lt;?php<br /><br />$servers </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.save_path"</span><span class="keyword">));<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$c</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />  </span><span class="default">$servers</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">":"</span><span class="keyword">, </span><span class="default">$servers</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />}<br /></span><span class="default">$memcached </span><span class="keyword">= new </span><span class="default">\Memcached</span><span class="keyword">();<br /></span><span class="default">call_user_func_array</span><span class="keyword">([ </span><span class="default">$memcached</span><span class="keyword">, </span><span class="string">"addServers" </span><span class="keyword">], </span><span class="default">$servers</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$memcached</span><span class="keyword">-&gt;</span><span class="default">getAllKeys</span><span class="keyword">());<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115306">  <div class="votes">
    <div id="Vu115306">
    <a href="/manual/vote-note.php?id=115306&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115306">
    <a href="/manual/vote-note.php?id=115306&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115306" title="80% like this...">
    12
    </div>
  </div>
  <a href="#115306" class="name">
  <strong class="user"><em>Ian Maddox</em></strong></a><a class="genanchor" href="#115306"> &para;</a><div class="date" title="2014-07-03 02:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115306">
<div class="phpcode"><code><span class="html">If you are setting data to the session and it immediately disappears and you aren't getting any warnings in your PHP error log, it's probably because your sessions expired sometime in the 1970s.<br /><br />Somewhere between memcached 1.0.2 and 2.1.0, the memcached session handler became sensitive to the 30-day TTL gotcha (aka "transparent failover").  If your session.gc_maxlifetime is greater than 2592000 (30 days), the value is treated as a unix timestamp instead of a relative seconds count.<br /><br />This issue is likely to impact anyone with long-running sessions who is upgrading from Ubuntu 12.04 to 14.04.</span></code></div>
  </div>
 </div>
  <div class="note" id="110251">  <div class="votes">
    <div id="Vu110251">
    <a href="/manual/vote-note.php?id=110251&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110251">
    <a href="/manual/vote-note.php?id=110251&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110251" title="75% like this...">
    18
    </div>
  </div>
  <a href="#110251" class="name">
  <strong class="user"><em>taubers at gmail dot com</em></strong></a><a class="genanchor" href="#110251"> &para;</a><div class="date" title="2012-10-04 11:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110251">
<div class="phpcode"><code><span class="html">If you are using the memcache class for session handling your key is the PHP session ID.  This is different than when using the  memcached class.<br /><br />Example with memcache:<br />GET nphu2u8eo5niltfgdbc33ajb62<br /><br />Example with memcached:<br />GET memc.sess.key.nphu2u8eo5niltfgdbc33ajb62<br /><br />For memcached, the prefix is set in the config:<br />memcached.sess_prefix = "memc.sess.key."</span></code></div>
  </div>
 </div>
  <div class="note" id="117701">  <div class="votes">
    <div id="Vu117701">
    <a href="/manual/vote-note.php?id=117701&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117701">
    <a href="/manual/vote-note.php?id=117701&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117701" title="80% like this...">
    3
    </div>
  </div>
  <a href="#117701" class="name">
  <strong class="user"><em>madalin at mgiworx dot co dot uk</em></strong></a><a class="genanchor" href="#117701"> &para;</a><div class="date" title="2015-07-24 08:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117701">
<div class="phpcode"><code><span class="html">short mention: Memcached has authentication support.</span></code></div>
  </div>
 </div>
  <div class="note" id="123349">  <div class="votes">
    <div id="Vu123349">
    <a href="/manual/vote-note.php?id=123349&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123349">
    <a href="/manual/vote-note.php?id=123349&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123349" title="75% like this...">
    2
    </div>
  </div>
  <a href="#123349" class="name">
  <strong class="user"><em>velazcomtz dot miguel at gmail dot com</em></strong></a><a class="genanchor" href="#123349"> &para;</a><div class="date" title="2018-11-15 11:22"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123349">
<div class="phpcode"><code><span class="html">Is important to address that memcached is not concurrent just as regular PHP sessions.<br /><br />If you have two tabs and one of them takes too long to respond and try to log out on the second, the memcached server won't respond.</span></code></div>
  </div>
 </div>
  <div class="note" id="91153">  <div class="votes">
    <div id="Vu91153">
    <a href="/manual/vote-note.php?id=91153&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91153">
    <a href="/manual/vote-note.php?id=91153&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91153" title="69% like this...">
    5
    </div>
  </div>
  <a href="#91153" class="name">
  <strong class="user"><em>Andrei Darashenka</em></strong></a><a class="genanchor" href="#91153"> &para;</a><div class="date" title="2009-05-27 07:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91153">
<div class="phpcode"><code><span class="html">This extension supports Session-locking!<br /><br />by default<br />MEMC_SESS_LOCK_ATTEMPTS   30<br />MEMC_SESS_LOCK_WAIT       100000<br />MEMC_SESS_LOCK_EXPIRATION 30</span></code></div>
  </div>
 </div>
  <div class="note" id="120918">  <div class="votes">
    <div id="Vu120918">
    <a href="/manual/vote-note.php?id=120918&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120918">
    <a href="/manual/vote-note.php?id=120918&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120918" title="56% like this...">
    2
    </div>
  </div>
  <a href="#120918" class="name">
  <strong class="user"><em>benoit dot delmotte at gmail dot com</em></strong></a><a class="genanchor" href="#120918"> &para;</a><div class="date" title="2017-03-31 01:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120918">
<div class="phpcode"><code><span class="html">in case of multiples memcached servers,<br />the separator is a semicolon ( ; ) not a comma as written <br /><br />example:<br />session.save_path = "sess1:11211; sess2:11211"</span></code></div>
  </div>
 </div>
  <div class="note" id="125248">  <div class="votes">
    <div id="Vu125248">
    <a href="/manual/vote-note.php?id=125248&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125248">
    <a href="/manual/vote-note.php?id=125248&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125248" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125248" class="name">
  <strong class="user"><em>atesin &gt; gmail</em></strong></a><a class="genanchor" href="#125248"> &para;</a><div class="date" title="2020-08-06 08:22"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125248">
<div class="phpcode"><code><span class="html">moderator please merge these posts<br /><br />an errata to my comment done on 2020-07-28 01:06 about tmpfs session dir...<br /><br />the tmpfs directory i used to install session files is "/run" not "/tmp"...  as /tmp is auto (or manual) deleted sometimes</span></code></div>
  </div>
 </div>
  <div class="note" id="125217">  <div class="votes">
    <div id="Vu125217">
    <a href="/manual/vote-note.php?id=125217&amp;page=memcached.sessions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125217">
    <a href="/manual/vote-note.php?id=125217&amp;page=memcached.sessions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125217" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125217" class="name">
  <strong class="user"><em>atesin &gt; gmail</em></strong></a><a class="genanchor" href="#125217"> &para;</a><div class="date" title="2020-07-28 01:06"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125217">
<div class="phpcode"><code><span class="html">memcached is great, is lightning fast, very versatile and useful, scalable, and is a must have for many projects<br /><br />but if you only want speed to minimize session file blocking there is also a good alternative, tmpfs<br /><br /><a href="https://eddmann.com/posts/storing-php-sessions-file-caches-in-memory-using-tmpfs/" rel="nofollow" target="_blank">https://eddmann.com/posts/storing-php-sessions-file-caches-in-memory-using-tmpfs/</a><br /><br />maybe if you are in debian you already had session directory in tmp (mounted as tmpfs), but beware of daily cleaning process that can mess up your sessions<br /><br />you can use this trick if you are in centos/other (like me) or even if you are in debian but want to get ride of /tmp cleaning task<br /><br />i realized in my system /run is also mounted as tmpfs, so i shut php-fpm down, moved my php session dir to /tmp/, reconfigure php and start again... (you can adapt it to your situation)<br /><br />  systemctl stop php-fpm<br />  cp -a /var/lib/php/session /tmp/php-session<br />  vim /etc/php-fpm-d/www.conf<br />  ------<br />  php_value[session.save_path] = /run/php-session<br />  ------<br />  systemctl start php-fpm<br /><br />the only drawback is tmpfs is VOLATILE, just like memcached (data is lost on unmount/shutdown/power fail), to  circumvent this risk i wrote another service that restores/backup php session dir before/after php starts/stops... (UNTESTED!)<br /><br />  vim /etc/systemd/system/php-session-backup.service<br />  ------<br />  # basic persistence for tmpfs php sessions<br />  <br />  [Unit]<br />  Description=PHP tmpfs sessions backup/restore on shutdown/boot<br />  Before=php-fpm.service<br />  <br />  [Service]<br />  Type=oneshot<br />  RemainAfterExit=true<br />  ExecStart=rm -fr /run/php-session<br />  ExecStart=cp -fa /var/lib/php/session /run/php-session<br />  ExecStop=rm -fr /var/lib/php/session<br />  ExecStop=cp -fa /run/php-session /var/lib/php/session<br />  <br />  [Install]<br />  WantedBy=multi-user.target<br />  ------<br />  systemctl enable php-session-backup<br /><br />you can also complement this with a daily backup task in case of system crash so you will lose just one day<br /><br />  crontab -e<br />  ------<br />  0 4 * * * rm -fr /var/lib/php/session;cp -fa /run/php-session /var/lib/php/session<br />  ------<br /><br />this is very rough though, you can better use inotify + rsync, could take some ideas from here<br /><br /><a href="https://blog.jmdawson.co.uk/persistent-ramdisk-on-debain-ubuntu/" rel="nofollow" target="_blank">https://blog.jmdawson.co.uk/persistent-ramdisk-on-debain-ubuntu/</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.sessions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.sessions.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.memcached.php">Memcached</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.memcached.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="memcached.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="memcached.expiration.php" title="Expiration Times">Expiration Times</a>
                        </li>
                                                <li class="">
                            <a href="memcached.callbacks.php" title="Callbacks">Callbacks</a>
                        </li>
                                                <li class="current">
                            <a href="memcached.sessions.php" title="Sessions support">Sessions support</a>
                        </li>
                                                <li class="">
                            <a href="class.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="class.memcachedexception.php" title="MemcachedException">MemcachedException</a>
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
