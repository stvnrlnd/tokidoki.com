---
id: 6e98cb15-1e58-4bb6-a274-74a8a99d2106
blueprint: html
title: 'Base Element: Setting the Base URL for Relative Links'
teaser: 'The base HTML element specifies a base URL for all relative URLs in a document, ensuring consistent link resolution and navigation.'
reference_title:
  code: '<base>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
      -
        type: text
        text: ' HTML element is used to specify a base URL for all relative URLs within a document. This element is placed within the '
      -
        type: text
        marks:
          -
            type: code
        text: '<head>'
      -
        type: text
        text: ' section and affects how relative URLs are resolved throughout the document, making it easier to manage and maintain links, images, scripts, and other resources. By setting a single base URL, developers can avoid repeating the same URL prefix for every relative link, simplifying the HTML code and reducing potential errors. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
      -
        type: text
        text: ' element must have either an '
      -
        type: text
        marks:
          -
            type: code
        text: href
      -
        type: text
        text: ' attribute, a '
      -
        type: text
        marks:
          -
            type: code
        text: target
      -
        type: text
        text: ' attribute, or both, and only one '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
      -
        type: text
        text: ' element is allowed per document.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: href
      -
        type: text
        text: ' attribute of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
      -
        type: text
        text: ' element specifies the base URL, which can be either an absolute or relative URL. When a relative URL is used elsewhere in the document, it is resolved against this base URL. The '
      -
        type: text
        marks:
          -
            type: code
        text: target
      -
        type: text
        text: ' attribute defines the default browsing context for hyperlinks and forms, determining where the linked resource will open. Common values for the '
      -
        type: text
        marks:
          -
            type: code
        text: target
      -
        type: text
        text: ' attribute include '
      -
        type: text
        marks:
          -
            type: code
        text: _self
      -
        type: text
        text: ' (current window), '
      -
        type: text
        marks:
          -
            type: code
        text: _blank
      -
        type: text
        text: ' (new window or tab), '
      -
        type: text
        marks:
          -
            type: code
        text: _parent
      -
        type: text
        text: ' (parent frame), and '
      -
        type: text
        marks:
          -
            type: code
        text: _top
      -
        type: text
        text: ' (topmost frame).'
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Example Usage'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <!DOCTYPE html>
          <html>
          <head>
            <title>Example of the <base> Element</title>
            <base href="https://www.example.com/" target="_blank">
          </head>
          <body>
            <p>Visit the <a href="about.html">About Us</a> page.</p>
          </body>
          </html>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In this example, the link to "About Us" will resolve to '
      -
        type: text
        marks:
          -
            type: code
        text: 'https://www.example.com/about.html'
      -
        type: text
        text: ' and open in a new tab due to the '
      -
        type: text
        marks:
          -
            type: code
        text: 'target="_blank"'
      -
        type: text
        text: ' setting.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
  -
    type: set
    attrs:
      id: m0h387t5
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - href
              - 'Specifies the base URL for resolving relative URLs.'
          -
            cells:
              - target
              - 'Sets the default target for hyperlinks and forms (e.g., _blank, _self).'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<base>'
      -
        type: text
        text: ' element is particularly useful in documents with multiple links or resources that share a common base URL, enhancing code maintainability and consistency. However, it is important to use it carefully, as it affects all relative URLs in the document, and incorrect settings can lead to unexpected results.'
link: 'https://html.spec.whatwg.org/multipage/semantics.html#the-base-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: document_metadata
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364902
seo_title: 'HTML Base Element: URL Reference Explained'
seo_description: 'Learn about the base HTML element for setting a default URL, simplifying link management and ensuring consistent navigation.'
og_title: 'Understanding the HTML Base Element'
og_description: 'Discover how the base element in HTML sets a default URL for relative links, ensuring consistent and efficient link management across web pages.'
date: '2025-03-30'
---
