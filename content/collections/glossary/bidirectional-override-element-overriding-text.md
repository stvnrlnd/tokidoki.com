---
id: 36163087-c645-4e6d-a43b-5dd212c06d9e
blueprint: html
title: 'BDO Element: Overriding Text Direction'
teaser: 'The bdo HTML element is used to explicitly override the current text direction, allowing developers to control the directionality of text display.'
reference_title:
  code: '<bdo>'
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
        text: '<bdo>'
      -
        type: text
        text: ' HTML element, which stands for '
      -
        type: text
        marks:
          -
            type: italic
        text: 'bidirectional override'
      -
        type: text
        text: ', is used to explicitly override the current text directionality of its content. This is particularly useful in web development when dealing with languages that have a different reading direction than the surrounding text. For instance, languages like Arabic and Hebrew are read from right to left (RTL), while English is read from left to right (LTR). The '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdo>'
      -
        type: text
        text: " element ensures that text within it is displayed in the specified direction, regardless of the surrounding text's directionality."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The primary attribute used with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdo>'
      -
        type: text
        text: ' element is '
      -
        type: text
        marks:
          -
            type: code
        text: dir
      -
        type: text
        text: ', which specifies the direction in which the text should be rendered. The '
      -
        type: text
        marks:
          -
            type: code
        text: dir
      -
        type: text
        text: ' attribute can take values such as '
      -
        type: text
        marks:
          -
            type: code
        text: ltr
      -
        type: text
        text: ' for left-to-right text direction and '
      -
        type: text
        marks:
          -
            type: code
        text: rtl
      -
        type: text
        text: ' for right-to-left text direction. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdo>'
      -
        type: text
        text: ' element, developers can ensure that text is displayed correctly in mixed-language documents, preventing layout issues that might arise from incorrect text flow. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdo>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <p>This text will go left to right.</p>
          <p><bdo dir="rtl">This text will go right to left.</bdo></p>
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
        text: '<bdo>'
  -
    type: set
    attrs:
      id: m0h3f1zr
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
              - dir
              - 'Specifies the direction of the text. Possible values are ltr (left-to-right) and rtl (right-to-left).'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdo>'
      -
        type: text
        text: ' element is a valuable tool for managing text directionality in multilingual web pages, ensuring that text is presented in the correct reading order. It is particularly useful for overriding the default text direction in documents where multiple languages are used.'
link: 'https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-bdo-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: inline_text_semantics
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364921
seo_title: 'HTML BDO Element: Text Direction Control'
seo_description: 'Learn about the bdo HTML element for overriding text direction, providing precise control over text display orientation.'
og_title: 'Understanding the HTML BDO Element'
og_description: 'Discover how the bdo element in HTML is used to override text direction, offering control over how text is displayed in different orientations.'
date: '2025-03-30'
---
