<?php

function password_crypt($password, $salt)
{
	$server_salt = '
	mQENBFLjk/8BCACZBgao/+1+YNlNDHkhZe7WEypRNBwoIDK9om28qFyJfpqEjeD6
	s5Bpa8v60dkXl1XpieaW2P0qw8Cp55WWZktrQwGxmdX0RPaoHxLtiLIRVf0rBu8J
	hjM0COB5cjEEtM7knNXJOPSPRET8uq9s488646AQ1YDo1dz9SbNUDJQrBnwmcAgx
	UePZuSstgBNBdPqRzxJswajtF5EhJSBe5JpOURnLWZYsxJXE1HMcgN0tOOjfMX1G
	TzNrEiGiysjFwioBDbf3Nzh9bt55YTFCdrlUWWf3yGVr1TRSwW5Zv0FW1DDM9COH
	4puDgbdjPZz2mp+MIEGFMYAymPXnDpyeyq57ABEBAAG0E25pY284MzExMEBnbWFp
	bC5jb22JARwEEAECAAYFAlLjk/8ACgkQZwJRjhYg9ugamwf/Y8eACwj3BPh9osxw
	vXFUZm1AdxjpIfCF3jXisSKuE8CPCP1ybpR4HoFoyq7HQc0VLjxATmvBKBryvj8d
	3FdIU+nZGYQkwa8ED/nLn08mSnmrm3d5GkkUh7icOFpNkBGRsTlt2Zzz4aY/I2Mj
	OiF3z5VM8q7jgQBV5iX1fleztRi5qL5dNpWT0qDjQl7MpDbs82EtcxMhyROsuNmM
	wJqnUGBq2jOKkfqfevsoXlwhdf5RletmElVW3Nj3iGb0jxCV+zs2hCdywVk0XLkq
	ZDme09RuOe1m7j6JrUW2iFl8A7g00LMxnNJxYwL1wd8S46ml/DZZhYnGVfjannbl
	VBZYhw==';

	$first_pass = base64_encode($password . $salt);
	$second_pass = sha1($first_pass . md5($server_salt));
	for ($i=0; $i < 5; $i++)
	{
		$third_pass = sha1($first_pass.$second_pass.$server_salt);
	}
	return $third_pass;
}

?>