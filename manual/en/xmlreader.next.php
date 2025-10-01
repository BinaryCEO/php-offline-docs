<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XMLReader::next - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xmlreader.next.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xmlreader.next.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xmlreader.next.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.xmlreader.php">
 <link rel="prev" href="https://www.php.net/manual/en/xmlreader.movetonextattribute.php">
 <link rel="next" href="https://www.php.net/manual/en/xmlreader.open.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xmlreader.next.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xmlreader.next.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xmlreader.next.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xmlreader.next.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xmlreader.next.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xmlreader.next.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xmlreader.next.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xmlreader.next.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xmlreader.next.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xmlreader.next.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xmlreader.next.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Move cursor to next node skipping all subtrees" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XMLReader::next - Manual" />
<meta name="twitter:description" content="Move cursor to next node skipping all subtrees" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XMLReader::next - Manual" />
<meta itemprop="description" content="Move cursor to next node skipping all subtrees" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Move cursor to next node skipping all subtrees" />

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
        <a href="xmlreader.open.php">
          XMLReader::open &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xmlreader.movetonextattribute.php">
          &laquo; XMLReader::moveToNextAttribute        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xmlreader.php'>XMLReader</a></li>      <li><a href='class.xmlreader.php'>XMLReader</a></li>      </ul>
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
            <option value='en/xmlreader.next.php' selected="selected">English</option>
            <option value='de/xmlreader.next.php'>German</option>
            <option value='es/xmlreader.next.php'>Spanish</option>
            <option value='fr/xmlreader.next.php'>French</option>
            <option value='it/xmlreader.next.php'>Italian</option>
            <option value='ja/xmlreader.next.php'>Japanese</option>
            <option value='pt_BR/xmlreader.next.php'>Brazilian Portuguese</option>
            <option value='ru/xmlreader.next.php'>Russian</option>
            <option value='tr/xmlreader.next.php'>Turkish</option>
            <option value='uk/xmlreader.next.php'>Ukrainian</option>
            <option value='zh/xmlreader.next.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xmlreader.next" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">XMLReader::next</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">XMLReader::next</span> &mdash; <span class="dc-title">Move cursor to next node skipping all subtrees</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-xmlreader.next-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>XMLReader::next</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Positions cursor on the next node skipping all subtrees.
   If no such node exists, the cursor is moved to the end of the document.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-xmlreader.next-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The name of the next node to move to.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-xmlreader.next-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-xmlreader.next-changelog">
  <h3 class="title">Changelog</h3>
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
       <code class="parameter">name</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-xmlreader.next-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="xmlreader.movetonextattribute.php" class="methodname" rel="rdfs-seeAlso">XMLReader::moveToNextAttribute()</a> - Position cursor on the next Attribute</span></li>
    <li><span class="methodname"><a href="xmlreader.movetoelement.php" class="methodname" rel="rdfs-seeAlso">XMLReader::moveToElement()</a> - Position cursor on the parent Element of current Attribute</span></li>
    <li><span class="methodname"><a href="xmlreader.movetoattribute.php" class="methodname" rel="rdfs-seeAlso">XMLReader::moveToAttribute()</a> - Move cursor to a named attribute</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlreader/xmlreader/next.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxmlreader.next%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xmlreader.next&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xmlreader.next.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117959">  <div class="votes">
    <div id="Vu117959">
    <a href="/manual/vote-note.php?id=117959&amp;page=xmlreader.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117959">
    <a href="/manual/vote-note.php?id=117959&amp;page=xmlreader.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117959" title="69% like this...">
    5
    </div>
  </div>
  <a href="#117959" class="name">
  <strong class="user"><em>ppp dot BOTSNEEDNOTAPPLY at salesfloor dot net</em></strong></a><a class="genanchor" href="#117959"> &para;</a><div class="date" title="2015-09-08 09:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117959">
<div class="phpcode"><code><span class="html">This method appears to follow these rules:<br /><br /> - if $localName names a sibling node, the cursor is moved to that node;<br /> - if $localName names an ancestor node, the cursor is moved to the end of that node;<br /> - if $localName names a node that is a sibling of any of the current node's ancestors, the cursor is moved to that node;<br /> - otherwise the cursor is moved outside the document.<br /><br />Note especially that this method never moves the cursor to child nodes.<br /><br />For example, given this XML document<br /><br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;root id="root" xmlns:xsi="<a href="http://www.w3.org/2001/XMLSchema-instance" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema-instance</a>"&gt;<br />  &lt;aaa id="1"&gt;<br />    &lt;bbb id="1.1"&gt;&lt;/bbb&gt;<br />    &lt;bbb id="1.2"&gt;&lt;/bbb&gt;<br />  &lt;/aaa&gt;<br />  &lt;ccc id="2" /&gt;<br />  &lt;aaa id="3"&gt;<br />    &lt;ddd id="3.1"&gt;<br />      &lt;aaa id="3.1.1"&gt;&lt;/aaa&gt;<br />    &lt;/ddd&gt;<br />    &lt;aaa id="3.2"&gt;&lt;/aaa&gt;<br />  &lt;/aaa&gt;<br />  &lt;aaa id="4"&gt;<br />    &lt;eee id="4.1"&gt;&lt;/eee&gt;<br />  &lt;/aaa&gt;<br />&lt;/root&gt;<br /><br />going from &lt;root id="root"&gt; to "bbb" places the cursor outside the document;<br />going from &lt;aaa id="1"&gt; to "bbb" places the cursor outside the document;<br />going from &lt;aaa id="1"&gt; to "aaa" places the cursor on &lt;aaa id="3"&gt;;<br />going from &lt;bbb id="1.1"&gt; to "bbb" places the cursor on &lt;bbb id="1.2"&gt;;<br />going from &lt;bbb id="1.2"&gt; to "bbb" places the cursor outside the document;<br />going from &lt;bbb id="1.1"&gt; to "ddd" places the cursor outside the document;<br />going from &lt;bbb id="1.1"&gt; to "aaa" places the cursor on &lt;/aaa&gt;;<br />going from &lt;bbb id="1.1"&gt; to "ccc" places the cursor on &lt;ccc id="2"&gt;;<br />going from &lt;bbb id="1.1"&gt; to "nonsuch" places the cursor outside the document;<br />going from &lt;bbb id="1.1"&gt; to "root" places the cursor on &lt;/root&gt;;<br />going from &lt;ddd id="3.1"&gt; to "aaa" places the cursor on &lt;aaa id="3.2"&gt;;<br />going from &lt;ddd id="3.1"&gt; to "eee" places the cursor outside the document;<br /><br />Try it yourself:<br /><br /><span class="default">&lt;?php<br /><br />$document </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;root id="root" xmlns:xsi="<a href="http://www.w3.org/2001/XMLSchema-instance" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema-instance</a>"&gt;<br />  &lt;aaa id="1"&gt;<br />    &lt;bbb id="1.1"&gt;&lt;/bbb&gt;<br />    &lt;bbb id="1.2"&gt;&lt;/bbb&gt;<br />  &lt;/aaa&gt;<br />  &lt;ccc id="2" /&gt;<br />  &lt;aaa id="3"&gt;<br />    &lt;ddd id="3.1"&gt;<br />      &lt;aaa id="3.1.1"&gt;&lt;/aaa&gt;<br />    &lt;/ddd&gt;<br />    &lt;aaa id="3.2"&gt;&lt;/aaa&gt;<br />  &lt;/aaa&gt;<br />  &lt;aaa id="4"&gt;<br />    &lt;eee id="4.1"&gt;&lt;/eee&gt;<br />  &lt;/aaa&gt;<br />&lt;/root&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"/tmp/xmlreader.php.xml"</span><span class="keyword">;<br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$document</span><span class="keyword">);<br /><br />echo </span><span class="string">"given this XML document\n\n</span><span class="default">$document</span><span class="string">\n\n"</span><span class="keyword">;<br /><br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"root"</span><span class="keyword">, </span><span class="string">"bbb"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="string">"bbb"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="string">"aaa"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"bbb"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.2"</span><span class="keyword">, </span><span class="string">"bbb"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"ddd"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"aaa"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"ccc"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"nonsuch"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"3.1"</span><span class="keyword">, </span><span class="string">"aaa"</span><span class="keyword">);<br /></span><span class="default">showNext</span><span class="keyword">(</span><span class="string">"3.1"</span><span class="keyword">, </span><span class="string">"eee"</span><span class="keyword">);<br /><br />function </span><span class="default">showNext</span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">, </span><span class="default">$to</span><span class="keyword">) {<br />  global </span><span class="default">$filename</span><span class="keyword">;<br /><br />  </span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">\XmlReader</span><span class="keyword">();<br />  </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">"file://</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">);<br />  while (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">()) {<br />    if (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">=== </span><span class="default">\XmlReader</span><span class="keyword">::</span><span class="default">ELEMENT</span><span class="keyword">) {<br />      if (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"id"</span><span class="keyword">) == </span><span class="default">$from</span><span class="keyword">) {<br />        echo </span><span class="string">"going from &lt;</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="string"> id=\"</span><span class="default">$from</span><span class="string">\"&gt;"</span><span class="keyword">;<br />        break;<br />      }<br />    }<br />  }<br /><br />  </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">);<br />  </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">=== </span><span class="default">\XmlReader</span><span class="keyword">::</span><span class="default">NONE</span><span class="keyword">) {<br />    if(!</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">()) {<br />      </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">"outside the document"</span><span class="keyword">;<br />    }<br />  }<br /><br />  if(!</span><span class="default">$destination</span><span class="keyword">) {<br />    if (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">=== </span><span class="default">\XmlReader</span><span class="keyword">::</span><span class="default">END_ELEMENT</span><span class="keyword">) {<br />      </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">"on &lt;/</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="string">&gt;"</span><span class="keyword">;<br />    } else if (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">=== </span><span class="default">\XmlReader</span><span class="keyword">::</span><span class="default">ELEMENT</span><span class="keyword">) {<br />      </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">"on &lt;</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="string"> id=\"" </span><span class="keyword">. </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"id"</span><span class="keyword">) . </span><span class="string">"\"&gt;"</span><span class="keyword">;<br />    }<br />  }<br /><br />  echo </span><span class="string">" to \"</span><span class="default">$to</span><span class="string">\" places the cursor </span><span class="default">$destination</span><span class="string">;\n"</span><span class="keyword">;<br /><br />  </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123774">  <div class="votes">
    <div id="Vu123774">
    <a href="/manual/vote-note.php?id=123774&amp;page=xmlreader.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123774">
    <a href="/manual/vote-note.php?id=123774&amp;page=xmlreader.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123774" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123774" class="name">
  <strong class="user"><em>Quiet Noise</em></strong></a><a class="genanchor" href="#123774"> &para;</a><div class="date" title="2019-04-13 01:39"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123774">
<div class="phpcode"><code><span class="html">next() without parameters will bring you to the next sibling node on the same depth as the depth where the current cursor is. <br />Examples:<br />1. If you are on an opening ELEMENT node next() will bring you to the new line node next to the closing tag of that element (i.e. if you have each tag in separate line) or it will bring you to the opening tag of next node on the same depth.<br />2. If you are on a TEXT node next() will bring you to the opening tag if there is one next to it.<br /><br />If there are no more nodes on the given depth next() will bring you to the closing tag (END_ELEMENT) of the wrapping parent.</span></code></div>
  </div>
 </div>
  <div class="note" id="117273">  <div class="votes">
    <div id="Vu117273">
    <a href="/manual/vote-note.php?id=117273&amp;page=xmlreader.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117273">
    <a href="/manual/vote-note.php?id=117273&amp;page=xmlreader.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117273" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#117273" class="name">
  <strong class="user"><em>gholson19 at gmail dot com</em></strong></a><a class="genanchor" href="#117273"> &para;</a><div class="date" title="2015-05-13 09:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117273">
<div class="phpcode"><code><span class="html">To skip over deletion nodes in the xml extracted from a word document, do something like this:<br /><br />if ($paragraph-&gt;nodeType == XMLREADER::ELEMENT &amp;&amp; $paragraph-&gt;name === 'w:del'){$paragraph-&gt;next();}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=xmlreader.next&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xmlreader.next.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.xmlreader.php">XMLReader</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="xmlreader.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.expand.php" title="expand">expand</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromstream.php" title="fromStream">fromStream</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromstring.php" title="fromString">fromString</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromuri.php" title="fromUri">fromUri</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattributeno.php" title="getAttributeNo">getAttributeNo</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattributens.php" title="getAttributeNs">getAttributeNs</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getparserproperty.php" title="getParserProperty">getParserProperty</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.isvalid.php" title="isValid">isValid</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.lookupnamespace.php" title="lookupNamespace">lookupNamespace</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattribute.php" title="moveToAttribute">moveToAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattributeno.php" title="moveToAttributeNo">moveToAttributeNo</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattributens.php" title="moveToAttributeNs">moveToAttributeNs</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoelement.php" title="moveToElement">moveToElement</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetofirstattribute.php" title="moveToFirstAttribute">moveToFirstAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetonextattribute.php" title="moveToNextAttribute">moveToNextAttribute</a>
                        </li>
                                                <li class="current">
                            <a href="xmlreader.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.read.php" title="read">read</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readinnerxml.php" title="readInnerXml">readInnerXml</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readouterxml.php" title="readOuterXml">readOuterXml</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readstring.php" title="readString">readString</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setparserproperty.php" title="setParserProperty">setParserProperty</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setrelaxngschema.php" title="setRelaxNGSchema">setRelaxNGSchema</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setrelaxngschemasource.php" title="setRelaxNGSchemaSource">setRelaxNGSchemaSource</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setschema.php" title="setSchema">setSchema</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.xml.php" title="XML">XML</a>
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
