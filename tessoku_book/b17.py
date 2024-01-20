def func():
    n = int(input())
    arr_h = list(map(int, input().split()))

    dp = [0]

    for i in range(1, len(arr_h)):
        cost_one = pow(10, 9) + 1
        cost_two = pow(10, 9) + 1
        if i > 0:
            cost_one = dp[i - 1] + abs(arr_h[i] - arr_h[i - 1])
        if i > 1:
            cost_two = dp[i - 2] + abs(arr_h[i] - arr_h[i - 2])
        dp.append(min(cost_one, cost_two))

    min_cost = dp[n - 1]

    tmp_position = n - 1
    ans_route = [n]
    while tmp_position > 0:
        if dp[tmp_position] - dp[tmp_position - 1] == abs(arr_h[tmp_position] - arr_h[tmp_position - 1]):
            ans_route.append(tmp_position)
            tmp_position = tmp_position - 1
        elif dp[tmp_position] - dp[tmp_position - 2] == abs(arr_h[tmp_position] - arr_h[tmp_position - 2]):
            ans_route.append(tmp_position - 1)
            tmp_position = tmp_position - 2
    print(len(ans_route))
    ans_route.reverse()
    print(*ans_route)


if __name__ == '__main__':
    func()
