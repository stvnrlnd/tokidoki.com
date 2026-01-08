---
id: decdfc0a-87d0-46a1-a49f-47fd7943c771
blueprint: html
title: 'Textarea Element: Multi-line Text Input'
teaser: 'The textarea HTML element is used to create a multi-line text input field, allowing users to enter large amounts of text. It is commonly used in forms for comments, feedback, or any input that requires more than a single line of text. The size of the textarea can be controlled with the rows and cols attributes.'
reference_title:
  code: '<textarea>'
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
        text: '<textarea>'
      -
        type: text
        text: ' HTML element is used to create a multi-line text input field in a form. Unlike the '
      -
        type: text
        marks:
          -
            type: code
        text: '<input>'
      -
        type: text
        text: ' element with '
      -
        type: text
        marks:
          -
            type: code
        text: 'type="text"'
      -
        type: text
        text: ', which is typically used for single-line input, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<textarea>'
      -
        type: text
        text: ' element allows users to enter larger blocks of text, such as comments, messages, or descriptions. It is a versatile form element that can be customized in size and appearance.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
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
        text: '<textarea>'
      -
        type: text
        text: ' element is a block-level element that can contain text as its initial value, which is displayed to the user when the page loads. It can be styled and resized according to the needs of the application. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<textarea>'
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
          <label for="comments">Comments:</label>
          <textarea id="comments" name="comments" rows="4" cols="50">
          Enter your comments here.
          </textarea>
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
        text: '<textarea>'
  -
    type: set
    attrs:
      id: m0ipng2w
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
              - name
              - 'Specifies the name of the control, which is submitted with the form data.'
          -
            cells:
              - rows
              - 'Specifies the visible number of lines in the text area.'
          -
            cells:
              - cols
              - 'Specifies the visible width of the text area, in average character widths.'
          -
            cells:
              - placeholder
              - 'Provides a short hint that describes the expected value of the input field.'
          -
            cells:
              - maxlength
              - 'Specifies the maximum number of characters allowed in the text area.'
          -
            cells:
              - readonly
              - 'A Boolean attribute that makes the text area read-only, preventing user modification.'
          -
            cells:
              - disabled
              - 'A Boolean attribute that disables the text area, preventing user interaction.'
          -
            cells:
              - required
              - 'A Boolean attribute that specifies that the user must fill in a value before submitting the form.'
          -
            cells:
              - wrap
              - 'Specifies how the text in the text area is wrapped when submitted in a form. Values can be soft, hard, or off.'
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
        text: '<textarea>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'User Input'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<textarea>'
              -
                type: text
                text: ' element provides a flexible way for users to input multi-line text, making it ideal for collecting detailed user feedback or longer text entries.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Customization
              -
                type: text
                text: ': The size and appearance of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<textarea>'
              -
                type: text
                text: ' can be customized using attributes and CSS, allowing developers to tailor it to fit the design and functionality of the form.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': Proper use of labels and attributes enhances accessibility, ensuring that the text area is usable by all users, including those relying on assistive technologies.'
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
        text: '<textarea>'
      -
        type: text
        text: ' element is a fundamental component for collecting multi-line text input in HTML forms. It offers flexibility in size and appearance, making it suitable for a wide range of applications where detailed user input is required. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<textarea>'
      -
        type: text
        text: ' element, developers can create user-friendly and accessible forms that accommodate larger text entries.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-textarea-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366796
seo_title: 'HTML Textarea Element: Multi-line Text Input Explained'
seo_description: 'Discover the textarea HTML element for creating multi-line text input fields, ideal for user comments and feedback in forms.'
og_title: 'Understanding the HTML Textarea Element'
og_description: 'Learn how the textarea element in HTML is used to provide multi-line text input fields, perfect for collecting extensive user input in web forms.'
date: '2025-03-30'
---
