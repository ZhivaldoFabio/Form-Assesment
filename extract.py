import re

input_file_path = 'form_assesment.php'  # Path to the input file
output_file_path = 'extracted.txt'  # Path to the output file

with open(input_file_path, 'r') as input_file, open(output_file_path, 'w') as output_file:
    for line in input_file:
        matches = re.findall(r'name="([^"]*)"', line)  # Find all occurrences of words between name=" and "
        
        for match in matches:
            output_file.write(match + '\n')  # Write the match to the output file
